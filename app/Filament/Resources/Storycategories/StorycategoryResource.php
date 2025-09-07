<?php

namespace App\Filament\Resources\Storycategories;

use App\Filament\Resources\Storycategories\Pages\CreateStorycategory;
use App\Filament\Resources\Storycategories\Pages\EditStorycategory;
use App\Filament\Resources\Storycategories\Pages\ListStorycategories;
use App\Filament\Resources\Storycategories\Pages\ViewStorycategory;
use App\Filament\Resources\Storycategories\Schemas\StorycategoryForm;
use App\Filament\Resources\Storycategories\Schemas\StorycategoryInfolist;
use App\Filament\Resources\Storycategories\Tables\StorycategoriesTable;
use App\Models\Storycategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StorycategoryResource extends Resource
{
    protected static ?string $model = Storycategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Story Category';

    public static function form(Schema $schema): Schema
    {
        return StorycategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StorycategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StorycategoriesTable::configure($table);
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
            'index' => ListStorycategories::route('/'),
            'create' => CreateStorycategory::route('/create'),
            'view' => ViewStorycategory::route('/{record}'),
            'edit' => EditStorycategory::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
