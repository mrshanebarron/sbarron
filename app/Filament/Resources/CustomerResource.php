<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Domain Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('User Information')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->label('User Account'),
                        Forms\Components\TextInput::make('company_name')
                            ->label('Company Name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->maxLength(255),
                    ])->columns(3),

                Forms\Components\Section::make('Address')
                    ->schema([
                        Forms\Components\TextInput::make('address_line_1')
                            ->label('Address Line 1')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address_line_2')
                            ->label('Address Line 2')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('city')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('state')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('postal_code')
                            ->label('Postal Code')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('country')
                            ->required()
                            ->maxLength(255)
                            ->default('US'),
                    ])->columns(2),

                Forms\Components\Section::make('Account Settings')
                    ->schema([
                        Forms\Components\TextInput::make('namecom_customer_id')
                            ->label('Name.com Customer ID')
                            ->maxLength(255)
                            ->disabled(),
                        Forms\Components\TextInput::make('account_balance')
                            ->label('Account Balance')
                            ->numeric()
                            ->prefix('$')
                            ->default(0)
                            ->required(),
                        Forms\Components\Toggle::make('auto_renew')
                            ->label('Auto Renew Domains')
                            ->default(true)
                            ->required(),
                    ])->columns(3),

                Forms\Components\Section::make('Notes')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->label('Internal Notes')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Company')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('account_balance')
                    ->label('Balance')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('domains_count')
                    ->counts('domains')
                    ->label('Domains')
                    ->sortable(),
                Tables\Columns\IconColumn::make('auto_renew')
                    ->label('Auto Renew')
                    ->boolean()
                    ->toggleable(),
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
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
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
