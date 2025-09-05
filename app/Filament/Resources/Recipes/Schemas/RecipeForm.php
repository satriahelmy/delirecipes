<?php

namespace App\Filament\Resources\Recipes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\Ingredient;

class RecipeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->required(),
                Textarea::make('about')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('recipeIngredients')
                    ->relationship()
                    ->schema([
                        Select::make('ingredient_id')
                            ->relationship('ingredient', 'name')
                            ->required(),
                    ]),
                Repeater::make('photos')
                    ->relationship()
                    ->schema([
                        FileUpload::make('photo')
                            ->required(),
                    ]),
                Select::make('recipe_author_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('url_video')
                    ->required()
                    ->url(),
                FileUpload::make('url_file')
                    ->required()
                    ->downloadable()
                    ->uploadingMessage('Uploading file...')
                    ->acceptedFileTypes(['application/pdf']),
            ]);
    }
}
