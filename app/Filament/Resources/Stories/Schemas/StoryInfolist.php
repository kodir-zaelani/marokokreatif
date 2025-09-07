<?php

namespace App\Filament\Resources\Stories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('title'),
                TextEntry::make('slug'),
                TextEntry::make('storycategory_id'),
                TextEntry::make('author_id'),
                TextEntry::make('reviewer_id'),
                ImageEntry::make('image'),
                TextEntry::make('status'),
                IconEntry::make('masterstatus')
                    ->boolean(),
                TextEntry::make('view_count')
                    ->numeric(),
                TextEntry::make('updated_by'),
                TextEntry::make('deleted_by'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
            ]);
    }
}
