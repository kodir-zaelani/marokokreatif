<?php

namespace App\Filament\Resources\Storycategories\Pages;

use App\Filament\Resources\Storycategories\StorycategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStorycategory extends ViewRecord
{
    protected static string $resource = StorycategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
