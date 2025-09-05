<?php

namespace App\Filament\Resources\RecipeAuthors\Pages;

use App\Filament\Resources\RecipeAuthors\RecipeAuthorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRecipeAuthor extends ViewRecord
{
    protected static string $resource = RecipeAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
