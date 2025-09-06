<?php

namespace App\Filament\Resources\Pagecategories\Pages;

use App\Filament\Resources\Pagecategories\PagecategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPagecategory extends EditRecord
{
    protected static string $resource = PagecategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
