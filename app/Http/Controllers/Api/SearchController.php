<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Http\Resources\Api\RecipeResource;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('query');
        $recipes = Recipe::where('name', 'like', "%$search%")->get();
        return RecipeResource::collection($recipes);
    }
}
