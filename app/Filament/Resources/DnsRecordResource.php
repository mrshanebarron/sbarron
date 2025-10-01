<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DnsRecordResource\Pages;
use App\Filament\Resources\DnsRecordResource\RelationManagers;
use App\Models\DnsRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DnsRecordResource extends Resource
{
    protected static ?string $model = DnsRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    protected static ?string $navigationGroup = 'Domain Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('DNS Record Information')
                    ->schema([
                        Forms\Components\Select::make('domain_id')
                            ->relationship('domain', 'domain_name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('type')
                            ->options([
                                'A' => 'A - IPv4 Address',
                                'AAAA' => 'AAAA - IPv6 Address',
                                'CNAME' => 'CNAME - Canonical Name',
                                'MX' => 'MX - Mail Exchange',
                                'TXT' => 'TXT - Text Record',
                                'NS' => 'NS - Nameserver',
                                'SRV' => 'SRV - Service',
                            ])
                            ->required()
                            ->reactive(),
                        Forms\Components\TextInput::make('host')
                            ->label('Host')
                            ->placeholder('@, www, mail, etc.')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Use @ for root domain'),
                        Forms\Components\TextInput::make('answer')
                            ->label('Value/Answer')
                            ->placeholder('IP address or target')
                            ->required()
                            ->maxLength(1000),
                    ])->columns(2),

                Forms\Components\Section::make('Advanced Settings')
                    ->schema([
                        Forms\Components\TextInput::make('ttl')
                            ->label('TTL (Time To Live)')
                            ->numeric()
                            ->default(300)
                            ->required()
                            ->suffix('seconds')
                            ->helperText('Lower values = faster updates, higher values = better performance'),
                        Forms\Components\TextInput::make('priority')
                            ->label('Priority')
                            ->numeric()
                            ->visible(fn ($get) => in_array($get('type'), ['MX', 'SRV']))
                            ->helperText('Lower values = higher priority (MX/SRV only)'),
                        Forms\Components\TextInput::make('namecom_record_id')
                            ->label('Name.com Record ID')
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated(false),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain.domain_name')
                    ->label('Domain')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'primary' => 'A',
                        'success' => 'AAAA',
                        'warning' => 'CNAME',
                        'info' => 'MX',
                        'secondary' => ['TXT', 'NS', 'SRV'],
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('host')
                    ->label('Host')
                    ->searchable()
                    ->weight('medium'),
                Tables\Columns\TextColumn::make('answer')
                    ->label('Value')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('ttl')
                    ->label('TTL')
                    ->numeric()
                    ->sortable()
                    ->suffix('s')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('priority')
                    ->numeric()
                    ->sortable()
                    ->toggleable()
                    ->placeholder('—'),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('domain')
                    ->relationship('domain', 'domain_name')
                    ->searchable()
                    ->preload(),
                SelectFilter::make('type')
                    ->options([
                        'A' => 'A',
                        'AAAA' => 'AAAA',
                        'CNAME' => 'CNAME',
                        'MX' => 'MX',
                        'TXT' => 'TXT',
                        'NS' => 'NS',
                        'SRV' => 'SRV',
                    ]),
                TernaryFilter::make('is_active')
                    ->label('Active'),
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
            ->defaultSort('domain.domain_name', 'asc');
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
            'index' => Pages\ListDnsRecords::route('/'),
            'create' => Pages\CreateDnsRecord::route('/create'),
            'edit' => Pages\EditDnsRecord::route('/{record}/edit'),
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
