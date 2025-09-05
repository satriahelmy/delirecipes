<?php

namespace App\Filament\Resources\Ingredients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class IngredientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('photo')
                    ->image()
                    ->required(),
            ]);
    }
}
