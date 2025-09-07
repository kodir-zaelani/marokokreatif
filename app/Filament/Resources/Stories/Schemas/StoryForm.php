<?php

namespace App\Filament\Resources\Stories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('storycategory_id')
                    ->required(),
                TextInput::make('author_id')
                    ->required(),
                TextInput::make('reviewer_id')
                    ->default(null),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('feedback')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('video')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('caption_video')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('waiting for review'),
                Toggle::make('masterstatus')
                    ->required(),
                TextInput::make('view_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('updated_by')
                    ->default(null),
                TextInput::make('deleted_by')
                    ->default(null),
            ]);
    }
}
