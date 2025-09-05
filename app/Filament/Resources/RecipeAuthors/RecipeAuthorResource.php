<?php

namespace App\Filament\Resources\RecipeAuthors;

use App\Filament\Resources\RecipeAuthors\Pages\CreateRecipeAuthor;
use App\Filament\Resources\RecipeAuthors\Pages\EditRecipeAuthor;
use App\Filament\Resources\RecipeAuthors\Pages\ListRecipeAuthors;
use App\Filament\Resources\RecipeAuthors\Pages\ViewRecipeAuthor;
use App\Filament\Resources\RecipeAuthors\Schemas\RecipeAuthorForm;
use App\Filament\Resources\RecipeAuthors\Schemas\RecipeAuthorInfolist;
use App\Filament\Resources\RecipeAuthors\Tables\RecipeAuthorsTable;
use App\Models\RecipeAuthor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecipeAuthorResource extends Resource
{
    protected static ?string $model = RecipeAuthor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Recipe Author';

    public static function form(Schema $schema): Schema
    {
        return RecipeAuthorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RecipeAuthorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RecipeAuthorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRecipeAuthors::route('/'),
            'create' => CreateRecipeAuthor::route('/create'),
            'view' => ViewRecipeAuthor::route('/{record}'),
            'edit' => EditRecipeAuthor::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
