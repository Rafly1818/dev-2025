<?php

namespace App\Filament\Admin\Resources\BarbersResource\Pages;

use App\Filament\Admin\Resources\BarbersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarbers extends ListRecords
{
    protected static string $resource = BarbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
