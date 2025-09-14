<?php

namespace App\Filament\Resources\CategoryProducts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_category')
                    ->required(),
            ]);
    }
}
