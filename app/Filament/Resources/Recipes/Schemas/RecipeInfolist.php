<?php

namespace App\Filament\Resources\Recipes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RecipeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('slug'),
                TextEntry::make('thumbnail'),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('recipe_author_id')
                    ->numeric(),
                TextEntry::make('url_video'),
                TextEntry::make('url_title'),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
