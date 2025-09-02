<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeAuthor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'photo',
        // Currently no specific fields in migration, but keeping structure for future use
    ];

    // Relationships
    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'recipe_author_id');
    }
}
