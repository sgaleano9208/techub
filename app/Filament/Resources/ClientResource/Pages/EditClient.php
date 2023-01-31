<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\View\View;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeading(): string
    {
        return 'Edit ' . $this->record->name;
    }

    protected function getActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Back')
                ->link()
                ->icon('heroicon-o-arrow-left')
//                ->url(\Illuminate\Support\Facades\URL::previous()),
        ->url(route('filament.resources.clients.index')),
            Actions\DeleteAction::make(),
        ];
    }
}
