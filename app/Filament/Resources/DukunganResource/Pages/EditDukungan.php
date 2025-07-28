<?php

namespace App\Filament\Resources\DukunganResource\Pages;

use App\Filament\Resources\DukunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDukungan extends EditRecord
{
    protected static string $resource = DukunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
