<?php

namespace App\Filament\Resources\Pagecategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PagecategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                ->columnSpanFull()
                    ->image(),
                TextInput::make('title')
                    ->required(),
            ]);
    }
}
