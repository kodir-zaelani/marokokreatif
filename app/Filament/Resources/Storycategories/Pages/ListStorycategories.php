<?php

namespace App\Filament\Resources\Storycategories\Pages;

use App\Filament\Resources\Storycategories\StorycategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStorycategories extends ListRecords
{
    protected static string $resource = StorycategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
