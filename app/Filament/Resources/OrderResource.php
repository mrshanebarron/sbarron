<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationGroup = 'Domain Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Order Information')
                    ->schema([
                        Forms\Components\TextInput::make('order_number')
                            ->label('Order Number')
                            ->disabled()
                            ->dehydrated(false),
                        Forms\Components\Select::make('customer_id')
                            ->relationship('customer', 'company_name')
                            ->getOptionLabelFromRecordUsing(fn (Customer $record) => $record->company_name ?? $record->user->name)
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('domain_id')
                            ->relationship('domain', 'domain_name')
                            ->searchable()
                            ->preload(),
                        Forms\Components\Select::make('type')
                            ->options([
                                'registration' => 'Registration',
                                'renewal' => 'Renewal',
                                'transfer' => 'Transfer',
                                'dns_service' => 'DNS Service',
                            ])
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'processing' => 'Processing',
                                'completed' => 'Completed',
                                'failed' => 'Failed',
                                'refunded' => 'Refunded',
                            ])
                            ->default('pending')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Pricing')
                    ->schema([
                        Forms\Components\TextInput::make('subtotal')
                            ->label('Subtotal')
                            ->numeric()
                            ->prefix('$')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set, $get) =>
                                $set('total', $state + ($get('tax') ?? 0))
                            ),
                        Forms\Components\TextInput::make('tax')
                            ->label('Tax')
                            ->numeric()
                            ->prefix('$')
                            ->default(0)
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set, $get) =>
                                $set('total', ($get('subtotal') ?? 0) + $state)
                            ),
                        Forms\Components\TextInput::make('total')
                            ->label('Total')
                            ->numeric()
                            ->prefix('$')
                            ->required()
                            ->disabled()
                            ->dehydrated(),
                    ])->columns(3),

                Forms\Components\Section::make('Payment')
                    ->schema([
                        Forms\Components\Select::make('payment_method')
                            ->options([
                                'credit_card' => 'Credit Card',
                                'paypal' => 'PayPal',
                                'stripe' => 'Stripe',
                                'account_balance' => 'Account Balance',
                            ]),
                        Forms\Components\TextInput::make('payment_id')
                            ->label('Payment ID')
                            ->maxLength(255),
                        Forms\Components\Select::make('payment_status')
                            ->options([
                                'pending' => 'Pending',
                                'authorized' => 'Authorized',
                                'paid' => 'Paid',
                                'failed' => 'Failed',
                                'refunded' => 'Refunded',
                            ]),
                        Forms\Components\DateTimePicker::make('paid_at')
                            ->label('Paid At'),
                    ])->columns(2),

                Forms\Components\Section::make('Additional Information')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->label('Notes')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\KeyValue::make('metadata')
                            ->label('Metadata')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Order #')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('customer.company_name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('domain.domain_name')
                    ->label('Domain')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'primary' => 'registration',
                        'warning' => 'renewal',
                        'info' => 'transfer',
                        'secondary' => 'dns_service',
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'info' => 'processing',
                        'success' => 'completed',
                        'danger' => 'failed',
                        'secondary' => 'refunded',
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->money('USD')
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('payment_status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'info' => 'authorized',
                        'success' => 'paid',
                        'danger' => 'failed',
                        'secondary' => 'refunded',
                    ])
                    ->toggleable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Method')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('paid_at')
                    ->label('Paid')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'registration' => 'Registration',
                        'renewal' => 'Renewal',
                        'transfer' => 'Transfer',
                        'dns_service' => 'DNS Service',
                    ]),
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'processing' => 'Processing',
                        'completed' => 'Completed',
                        'failed' => 'Failed',
                        'refunded' => 'Refunded',
                    ]),
                SelectFilter::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'authorized' => 'Authorized',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                        'refunded' => 'Refunded',
                    ]),
                SelectFilter::make('customer')
                    ->relationship('customer', 'company_name'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
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
