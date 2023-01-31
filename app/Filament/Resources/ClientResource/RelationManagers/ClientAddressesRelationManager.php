<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientAddressesRelationManager extends RelationManager
{
    protected static string $relationship = 'clientAddresses';

    protected static ?string $recordTitleAttribute = 'address';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('address')
                    ->required()
                ->autofocus(),
                Forms\Components\Select::make('country_id')
                ->relationship('country', 'name')
                ->reactive()
                ->afterStateUpdated(function (callable $set) {
                    $set('state_id', null);
                    $set('city_id', null);
                }),
                /*
                 * Esto es para el futuro v2
                 */
                /*->createOptionForm([
                    Forms\Components\TextInput::make('name')
                        ->autofocus()
                        ->required(),
                ])*/
                Forms\Components\Select::make('state_id')
                ->relationship('state', 'name', function (Builder $query, $get) {
                    $query->where('country_id', $get('country_id'));
                })
                ->reactive()
                ->afterStateUpdated(function (callable $set) {
                    $set('city_id', null);
                })
                ->visible(fn ($get) => $get('country_id')),
                /*
                 * Esto es para el futuro v2
                 */
                /*->createOptionForm([
                    Forms\Components\TextInput::make('name')
                        ->autofocus()
                        ->required(),
                ])
                ->createOptionUsing(function (callable $get, array $data) {
                    $country = Country::find($get('country_id'));
                    $data['country_id'] = $country;
                    return $country->states()->create($data);
                })*/
                Forms\Components\Select::make('city_id')
                ->relationship('city', 'name', function (Builder $query, $get) {
                    $query->where('state_id', $get('state_id'));
                })
                ->visible(fn ($get) => $get('state_id')),
                Forms\Components\Radio::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->required()
                    ->inline(),
                Forms\Components\Select::make('type')
                    ->options([
                        'billing' => 'Billing',
                        'shipping' => 'Shipping',
                    ])
                    ->default('billing')
                    ->required(),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('country.name')
                    ->label('Country'),
                Tables\Columns\TextColumn::make('state.name')
                    ->label('State'),
                Tables\Columns\TextColumn::make('city.name')
                    ->label('City'),
                Tables\Columns\BadgeColumn::make('type')
                    ->label('Type')
                    ->enum([
                        'billing' => 'Billing',
                        'shipping' => 'Shipping',
                    ])
                ->colors([
                        'success' => 'billing',
                        'warning' => 'shipping',
                    ]),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
