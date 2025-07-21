<?php

namespace App\Filament\Admin\Resources\BarbersResource\Pages;

use App\Filament\Admin\Resources\BarbersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarbers extends EditRecord
{
    protected static string $resource = BarbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
