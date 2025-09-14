<?php

namespace App\Filament\Resources\CategoryProducts\Pages;

use App\Filament\Resources\CategoryProducts\CategoryProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryProduct extends CreateRecord
{
    protected static string $resource = CategoryProductResource::class;
}
