<?php

namespace App\Filament\Resources\RecipeAuthors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class RecipeAuthorForm
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
