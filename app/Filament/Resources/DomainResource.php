<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomainResource\Pages;
use App\Filament\Resources\DomainResource\RelationManagers;
use App\Models\Domain;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DomainResource extends Resource
{
    protected static ?string $model = Domain::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationGroup = 'Domain Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Domain Information')
                    ->schema([
                        Forms\Components\Select::make('customer_id')
                            ->relationship('customer', 'company_name')
                            ->getOptionLabelFromRecordUsing(fn (Customer $record) => $record->company_name ?? $record->user->name)
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('domain_name')
                            ->label('Domain Name')
                            ->placeholder('example.com')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tld')
                            ->label('TLD')
                            ->placeholder('com')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'active' => 'Active',
                                'expired' => 'Expired',
                                'cancelled' => 'Cancelled',
                                'failed' => 'Failed',
                            ])
                            ->default('pending')
                            ->required(),
                        Forms\Components\TextInput::make('namecom_domain_id')
                            ->label('Name.com Domain ID')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Pricing')
                    ->schema([
                        Forms\Components\TextInput::make('purchase_price')
                            ->label('Purchase Price')
                            ->numeric()
                            ->prefix('$')
                            ->required(),
                        Forms\Components\TextInput::make('renewal_price')
                            ->label('Renewal Price')
                            ->numeric()
                            ->prefix('$')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Dates')
                    ->schema([
                        Forms\Components\DatePicker::make('registered_at')
                            ->label('Registration Date')
                            ->displayFormat('M d, Y'),
                        Forms\Components\DatePicker::make('expires_at')
                            ->label('Expiration Date')
                            ->displayFormat('M d, Y'),
                    ])->columns(2),

                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\Toggle::make('auto_renew')
                            ->label('Auto Renew')
                            ->default(true),
                        Forms\Components\Toggle::make('privacy_enabled')
                            ->label('Privacy Protection')
                            ->default(true),
                        Forms\Components\Toggle::make('locked')
                            ->label('Domain Lock')
                            ->default(false),
                    ])->columns(3),

                Forms\Components\Section::make('DNS & Notes')
                    ->schema([
                        Forms\Components\TagsInput::make('nameservers')
                            ->label('Nameservers')
                            ->placeholder('Add nameserver'),
                        Forms\Components\Textarea::make('notes')
                            ->label('Notes')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain_name')
                    ->label('Domain')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('customer.company_name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'active',
                        'danger' => ['expired', 'failed'],
                        'secondary' => 'cancelled',
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expires_at')
                    ->label('Expires')
                    ->date('M d, Y')
                    ->sortable()
                    ->color(fn (Domain $record): string => match (true) {
                        $record->isExpired() => 'danger',
                        $record->isExpiringSoon() => 'warning',
                        default => 'success',
                    }),
                Tables\Columns\TextColumn::make('purchase_price')
                    ->label('Purchase')
                    ->money('USD')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('renewal_price')
                    ->label('Renewal')
                    ->money('USD')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('auto_renew')
                    ->label('Auto Renew')
                    ->boolean()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('privacy_enabled')
                    ->label('Privacy')
                    ->boolean()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('locked')
                    ->boolean()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('registered_at')
                    ->label('Registered')
                    ->date('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'active' => 'Active',
                        'expired' => 'Expired',
                        'cancelled' => 'Cancelled',
                        'failed' => 'Failed',
                    ]),
                SelectFilter::make('customer')
                    ->relationship('customer', 'company_name'),
                TernaryFilter::make('auto_renew')
                    ->label('Auto Renew'),
                TernaryFilter::make('privacy_enabled')
                    ->label('Privacy Enabled'),
                TernaryFilter::make('locked'),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('expires_at', 'asc');
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
            'index' => Pages\ListDomains::route('/'),
            'create' => Pages\CreateDomain::route('/create'),
            'edit' => Pages\EditDomain::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
