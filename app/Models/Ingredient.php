<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Recipepart[] $recipeparts
 * @property Collection|Quantity[] $quantities
 *
 * @package App\Models
 */
class Ingredient extends Model
{
	protected $table = 'ingredient';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function recipeparts()
	{
		return $this->belongsToMany(Recipepart::class, 'recipepart_ingredient_quantity', 'ingredient-id')
					->withPivot('id', 'quantity_id');
	}

	public function quantities()
	{
		return $this->belongsToMany(Quantity::class, 'recipepart_ingredient_quantity', 'ingredient-id')
					->withPivot('id', 'recipepart_id');
	}
}
