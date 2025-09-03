<?php

namespace App\Filament\Resources\Pagecategories;

use App\Filament\Resources\Pagecategories\Pages\CreatePagecategory;
use App\Filament\Resources\Pagecategories\Pages\EditPagecategory;
use App\Filament\Resources\Pagecategories\Pages\ListPagecategories;
use App\Filament\Resources\Pagecategories\Schemas\PagecategoryForm;
use App\Filament\Resources\Pagecategories\Tables\PagecategoriesTable;
use App\Models\Pagecategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PagecategoryResource extends Resource
{
    protected static ?string $model = Pagecategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Page Category';

    public static function form(Schema $schema): Schema
    {
        return PagecategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PagecategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPagecategories::route('/'),
            'create' => CreatePagecategory::route('/create'),
            'edit' => EditPagecategory::route('/{record}/edit'),
        ];
    }
}
