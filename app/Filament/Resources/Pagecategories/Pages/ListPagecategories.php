<?php

namespace App\Filament\Resources\Pagecategories\Pages;

use App\Filament\Resources\Pagecategories\PagecategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPagecategories extends ListRecords
{
    protected static string $resource = PagecategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
