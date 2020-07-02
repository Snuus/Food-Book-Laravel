<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecipepartIngredientQuantity
 * 
 * @property int $id
 * @property int $recipepart_id
 * @property int $ingredient-id
 * @property int $quantity_id
 * 
 * @property Recipepart $recipepart
 * @property Ingredient $ingredient
 * @property Quantity $quantity
 *
 * @package App\Models
 */
class RecipepartIngredientQuantity extends Model
{
	protected $table = 'recipepart_ingredient_quantity';
	public $timestamps = false;

	protected $casts = [
		'recipepart_id' => 'int',
		'ingredient-id' => 'int',
		'quantity_id' => 'int'
	];

	protected $fillable = [
		'recipepart_id',
		'ingredient-id',
		'quantity_id'
	];

	public function recipepart()
	{
		return $this->belongsTo(Recipepart::class);
	}

	public function ingredient()
	{
		return $this->belongsTo(Ingredient::class, 'ingredient-id');
	}

	public function quantity()
	{
		return $this->belongsTo(Quantity::class);
	}
}
