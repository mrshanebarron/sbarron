<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HostingServiceResource\Pages;
use App\Filament\Resources\HostingServiceResource\RelationManagers;
use App\Models\HostingService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HostingServiceResource extends Resource
{
    protected static ?string $model = HostingService::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';

    protected static ?string $navigationLabel = 'My Hosting';

    protected static ?string $modelLabel = 'Hosting Service';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Service Details')
                    ->schema([
                        Forms\Components\Select::make('hosting_plan_id')
                            ->relationship('hostingPlan', 'name')
                            ->required()
                            ->disabled(),
                        Forms\Components\TextInput::make('domain')
                            ->label('Domain Name')
                            ->placeholder('example.com')
                            ->helperText('Enter your domain without http:// or www')
                            ->required(),
                        Forms\Components\TextInput::make('git_repo')
                            ->label('Git Repository (Optional)')
                            ->placeholder('git@github.com:username/repo.git')
                            ->helperText('Your Laravel application repository'),
                        Forms\Components\Select::make('git_branch')
                            ->label('Git Branch')
                            ->options([
                                'main' => 'main',
                                'master' => 'master',
                                'production' => 'production',
                            ])
                            ->default('master'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Server Information')
                    ->schema([
                        Forms\Components\TextInput::make('server_ip')
                            ->label('Server IP')
                            ->disabled(),
                        Forms\Components\TextInput::make('database_name')
                            ->label('Database Name')
                            ->disabled(),
                        Forms\Components\TextInput::make('database_user')
                            ->label('Database User')
                            ->disabled(),
                        Forms\Components\TextInput::make('database_password')
                            ->label('Database Password')
                            ->password()
                            ->revealable()
                            ->disabled(),
                    ])
                    ->columns(2)
                    ->visible(fn ($record) => $record?->status === 'active'),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Placeholder::make('status')
                            ->content(fn ($record) => ucfirst($record?->status ?? 'pending')),
                        Forms\Components\Placeholder::make('provisioned_at')
                            ->label('Provisioned On')
                            ->content(fn ($record) => $record?->provisioned_at?->format('M d, Y H:i') ?? 'Not provisioned'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hostingPlan.name')
                    ->label('Plan')
                    ->sortable()
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('domain')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Domain copied!')
                    ->icon('heroicon-o-globe-alt')
                    ->default('Not configured'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'provisioning' => 'warning',
                        'pending' => 'gray',
                        'suspended' => 'danger',
                        'failed' => 'danger',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('server_ip')
                    ->label('Server')
                    ->copyable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('provisioned_at')
                    ->label('Activated')
                    ->dateTime()
                    ->sortable()
                    ->default('Not provisioned'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Purchased')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'provisioning' => 'Provisioning',
                        'active' => 'Active',
                        'suspended' => 'Suspended',
                        'failed' => 'Failed',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('provision')
                    ->icon('heroicon-o-rocket-launch')
                    ->color('success')
                    ->visible(fn ($record) => $record->status === 'pending' && $record->domain && $record->git_repo)
                    ->action(function ($record) {
                        \App\Jobs\ProvisionHostingJob::dispatch(
                            $record,
                            $record->domain,
                            $record->git_repo,
                            $record->git_branch ?? 'master'
                        );

                        \Filament\Notifications\Notification::make()
                            ->title('Provisioning Started')
                            ->success()
                            ->body('Your hosting environment is being set up. This may take a few minutes.')
                            ->send();
                    }),
                Tables\Actions\Action::make('configure_dns')
                    ->label('Configure DNS')
                    ->icon('heroicon-o-globe-alt')
                    ->color('warning')
                    ->visible(fn ($record) => $record->domain)
                    ->requiresConfirmation()
                    ->modalHeading('Configure DNS Records')
                    ->modalDescription(fn ($record) => 'This will point ' . $record->domain . ' to our server (157.245.211.127). Continue?')
                    ->action(function ($record) {
                        $provisioning = new \App\Services\ProvisioningService();
                        $result = $provisioning->configureDNS($record->domain);

                        if ($result['success']) {
                            \Filament\Notifications\Notification::make()
                                ->title('DNS Configured')
                                ->success()
                                ->body('DNS records have been updated. Changes may take up to 48 hours to propagate.')
                                ->send();
                        } else {
                            \Filament\Notifications\Notification::make()
                                ->title('DNS Configuration Failed')
                                ->danger()
                                ->body($result['error'] ?? $result['message'] ?? 'Unknown error')
                                ->send();
                        }
                    }),
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                // Remove bulk actions for customers
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Only show services for the current user's customer
        if (auth()->check()) {
            $customer = auth()->user()->customer;
            if ($customer) {
                $query->where('customer_id', $customer->id);
            }
        }

        return $query;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHostingServices::route('/'),
            'edit' => Pages\EditHostingService::route('/{record}/edit'),
            'view' => Pages\ViewHostingService::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Services created via Stripe webhook
    }

    public static function canDelete($record): bool
    {
        return false; // Services managed via Stripe
    }
}
