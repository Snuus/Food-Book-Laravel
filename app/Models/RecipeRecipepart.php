<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecipeRecipepart
 * 
 * @property int $id
 * @property int $recipe_id
 * @property int $recipepart_id
 * 
 * @property Recipepart $recipepart
 * @property Recipe $recipe
 *
 * @package App\Models
 */
class RecipeRecipepart extends Model
{
	protected $table = 'recipe_recipepart';
	public $timestamps = false;

	protected $casts = [
		'recipe_id' => 'int',
		'recipepart_id' => 'int'
	];

	protected $fillable = [
		'recipe_id',
		'recipepart_id'
	];

	public function recipepart()
	{
		return $this->belongsTo(Recipepart::class);
	}

	public function recipe()
	{
		return $this->belongsTo(Recipe::class);
	}
}
