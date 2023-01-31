<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Pages\ViewRecord;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->columns([
                    'md' => 1,
                    'xl' => 4,
                ])
                ->schema([
                    Forms\Components\Card::make()
                        ->columnSpan([
                            'md' => 'full',
                            'xl' => 1,
                        ])
                        ->columns(1)
            ->schema([
                Forms\Components\FileUpload::make('logo')
                    ->maxFiles(1)
                    ->maxSize(1024),
                Forms\Components\Radio::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->required()
                ->inline(),
            ]),
                    Forms\Components\Card::make()
                    ->columnSpan([
                        'md' => 'full',
                        'xl' => 3,
                    ])
                        ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->autofocus()
                            ->required()
                        ->columnSpanFull(),
                        Forms\Components\TextInput::make('email')
                        ->email(),
                        Forms\Components\TextInput::make('phone')
                        ->tel(),
                        Forms\Components\TextInput::make('vat')
                        ->required(),
Forms\Components\Select::make('origin')
                        ->options([
                            'organic' => 'Organic',
                            'conventional' => 'Conventional',
                        ])
                        ->required()
                        ->default('organic'),
                        Forms\Components\Select::make('type')
                        ->options([
                            'farmer' => 'Farmer',
                            'distributor' => 'Distributor',
                            'retailer' => 'Retailer',
                            'other' => 'Other',
                        ])
                        ->default('farmer'),
                        Forms\Components\Select::make('technician_id')
                        ->relationship('technician', 'name', /*fn(Builder $query) => $query->where('role', 'technician')*/)

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable([
                        'name',
                        'email',
                    ]),
                Tables\Columns\BadgeColumn::make('status')
                ->enum([
                    'active'=> 'Active',
                    'inactive' => 'Inactive',
                ])
                ->colors([
                    'success' => 'active',
                    'danger' => 'inactive',
                ])
                ->icons([
                    'heroicon-o-check-circle' => 'active',
                    'heroicon-o-x-circle' => 'inactive',
                ])
                ->iconPosition('before')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
//                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            RelationManagers\ClientAddressesRelationManager::class,
            RelationManagers\ClientContactsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
//            'view' => Pages\ViewClient::route('/{record}'),
        ];
    }    
}
