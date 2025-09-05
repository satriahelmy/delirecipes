<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'category_id',
        'recipe_author_id',
        'url_video',
        'url_file',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(RecipeAuthor::class, 'recipe_author_id');
    }

    public function recipeIngredients()
    {
        return $this->hasMany(RecipeIngredient::class, 'recipe_id');
    }

    public function photos()
    {
        return $this->hasMany(RecipePhoto::class, 'recipe_id');
    }

    public function tutorials()
    {
        return $this->hasMany(RecipeTutorial::class, 'recipe_id');
    }

    // public function ingredients()
    // {
    //     return $this->belongsToMany(Ingredient::class, 'recipe_ingredients');
    // }
}
