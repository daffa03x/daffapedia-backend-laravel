<?php

namespace App\Filament\Resources\CategoryProducts;

use App\Filament\Resources\CategoryProducts\Pages\CreateCategoryProduct;
use App\Filament\Resources\CategoryProducts\Pages\EditCategoryProduct;
use App\Filament\Resources\CategoryProducts\Pages\ListCategoryProducts;
use App\Filament\Resources\CategoryProducts\Schemas\CategoryProductForm;
use App\Filament\Resources\CategoryProducts\Tables\CategoryProductsTable;
use App\Models\CategoryProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryProductResource extends Resource
{
    protected static ?string $model = CategoryProduct::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name_category';

    public static function form(Schema $schema): Schema
    {
        return CategoryProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryProductsTable::configure($table);
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
            'index' => ListCategoryProducts::route('/'),
            'create' => CreateCategoryProduct::route('/create'),
            'edit' => EditCategoryProduct::route('/{record}/edit'),
        ];
    }
}
