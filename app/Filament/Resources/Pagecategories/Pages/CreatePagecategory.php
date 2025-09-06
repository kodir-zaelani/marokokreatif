<?php

namespace App\Filament\Resources\Pagecategories\Pages;

use App\Filament\Resources\Pagecategories\PagecategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePagecategory extends CreateRecord
{
    protected static string $resource = PagecategoryResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
