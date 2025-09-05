<?php

namespace App\Filament\Resources\RecipeAuthors\Pages;

use App\Filament\Resources\RecipeAuthors\RecipeAuthorResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRecipeAuthor extends EditRecord
{
    protected static string $resource = RecipeAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
