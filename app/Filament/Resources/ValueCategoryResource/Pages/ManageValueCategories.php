<?php

namespace App\Filament\Resources\ValueCategoryResource\Pages;

use App\Filament\Resources\ValueCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageValueCategories extends ManageRecords
{
    protected static string $resource = ValueCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Value Category';
    }
}
