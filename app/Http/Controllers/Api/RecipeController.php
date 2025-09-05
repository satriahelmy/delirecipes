<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Http\Resources\Api\RecipeResource;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('category','photos')->get();
        return RecipeResource::collection($recipes);
    }

    public function show(Recipe $recipe)
    {
        $recipe->load('category', 'author', 'recipeIngredients.ingredient', 'photos', 'tutorials');
        return new RecipeResource($recipe);
    }
}
