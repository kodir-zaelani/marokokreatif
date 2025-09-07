<?php

namespace App\Filament\Resources\Storycategories\Pages;

use App\Filament\Resources\Storycategories\StorycategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStorycategory extends CreateRecord
{
    protected static string $resource = StorycategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
