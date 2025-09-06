<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('pagecategory.name')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('video')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('caption_video')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('updated_by')
                    ->default(null),
                TextInput::make('deleted_by')
                    ->default(null),
            ]);
    }
}
