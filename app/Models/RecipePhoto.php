<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipePhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'recipe_id',
        'photo',
    ];

    // Relationships
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
