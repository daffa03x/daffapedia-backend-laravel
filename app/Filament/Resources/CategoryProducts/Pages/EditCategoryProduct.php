<?php

namespace App\Filament\Resources\CategoryProducts\Pages;

use App\Filament\Resources\CategoryProducts\CategoryProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoryProduct extends EditRecord
{
    protected static string $resource = CategoryProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
