<?php

namespace App\Filament\Resources\BannerAdvertisemenetResource\Pages;

use App\Filament\Resources\BannerAdvertisemenetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannerAdvertisemenets extends ListRecords
{
    protected static string $resource = BannerAdvertisemenetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
