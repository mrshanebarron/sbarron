<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HostingPlanResource\Pages;
use App\Filament\Resources\HostingPlanResource\RelationManagers;
use App\Models\HostingPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HostingPlanResource extends Resource
{
    protected static ?string $model = HostingPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';

    protected static ?string $navigationGroup = 'Hosting Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('monthly_price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('yearly_price')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('features')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('max_domains')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('max_databases')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('storage_limit')
                    ->required(),
                Forms\Components\TextInput::make('bandwidth_limit')
                    ->required(),
                Forms\Components\Toggle::make('ssl_included')
                    ->required(),
                Forms\Components\Toggle::make('daily_backups')
                    ->required(),
                Forms\Components\Toggle::make('staging_environment')
                    ->required(),
                Forms\Components\Toggle::make('priority_support')
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
                Forms\Components\Toggle::make('is_featured')
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthly_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('yearly_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_domains')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_databases')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('storage_limit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bandwidth_limit')
                    ->searchable(),
                Tables\Columns\IconColumn::make('ssl_included')
                    ->boolean(),
                Tables\Columns\IconColumn::make('daily_backups')
                    ->boolean(),
                Tables\Columns\IconColumn::make('staging_environment')
                    ->boolean(),
                Tables\Columns\IconColumn::make('priority_support')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListHostingPlans::route('/'),
            'create' => Pages\CreateHostingPlan::route('/create'),
            'edit' => Pages\EditHostingPlan::route('/{record}/edit'),
        ];
    }
}
