<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Quantity
 * 
 * @property int $id
 * @property string $measure
 * @property float $amount
 * 
 * @property Collection|Recipepart[] $recipeparts
 * @property Collection|Ingredient[] $ingredients
 *
 * @package App\Models
 */
class Quantity extends Model
{
	protected $table = 'quantity';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float'
	];

	protected $fillable = [
		'measure',
		'amount'
	];

	public function recipeparts()
	{
		return $this->belongsToMany(Recipepart::class, 'recipepart_ingredient_quantity')
					->withPivot('id', 'ingredient-id');
	}

	public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'recipepart_ingredient_quantity', 'quantity_id', 'ingredient-id')
					->withPivot('id', 'recipepart_id');
	}
}
