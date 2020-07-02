<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipepart
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $duration
 * @property string $text
 * 
 * @property Collection|Recipe[] $recipes
 * @property Collection|Ingredient[] $ingredients
 * @property Collection|Quantity[] $quantities
 * @property Collection|Step[] $steps
 *
 * @package App\Models
 */
class Recipepart extends Model
{
	protected $table = 'recipepart';
	public $timestamps = false;

	protected $dates = [
		'duration'
	];

	protected $fillable = [
		'name',
		'duration',
		'text'
	];

	public function recipes()
	{
		return $this->belongsToMany(Recipe::class)
					->withPivot('id');
	}

	public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'recipepart_ingredient_quantity', 'recipepart_id', 'ingredient-id')
					->withPivot('id', 'quantity_id');
	}

	public function quantities()
	{
		return $this->belongsToMany(Quantity::class, 'recipepart_ingredient_quantity')
					->withPivot('id', 'ingredient-id');
	}

	public function steps()
	{
		return $this->hasMany(Step::class);
	}
}
