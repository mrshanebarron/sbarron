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

    protected static ?string $navigationIcon = 'heroicon-o-cloud';

    protected static ?string $navigationGroup = 'Hosting Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                    ->relationship('customer', 'id')
                    ->required(),
                Forms\Components\Select::make('hosting_plan_id')
                    ->relationship('hostingPlan', 'name')
                    ->required(),
                Forms\Components\Select::make('domain_id')
                    ->relationship('domain', 'id'),
                Forms\Components\TextInput::make('service_name')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\TextInput::make('server_ip'),
                Forms\Components\TextInput::make('server_username'),
                Forms\Components\TextInput::make('database_name'),
                Forms\Components\TextInput::make('database_username'),
                Forms\Components\TextInput::make('ftp_username'),
                Forms\Components\TextInput::make('billing_cycle')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\DatePicker::make('next_billing_date'),
                Forms\Components\DatePicker::make('activated_at'),
                Forms\Components\DatePicker::make('expires_at'),
                Forms\Components\Toggle::make('auto_renew')
                    ->required(),
                Forms\Components\Textarea::make('metadata')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hostingPlan.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('domain.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('server_ip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('server_username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('database_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('database_username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ftp_username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('billing_cycle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('next_billing_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('activated_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expires_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('auto_renew')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'create' => Pages\CreateHostingService::route('/create'),
            'edit' => Pages\EditHostingService::route('/{record}/edit'),
        ];
    }
}
