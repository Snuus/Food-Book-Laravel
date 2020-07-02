<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Step
 * 
 * @property int $id
 * @property int $stepnumber
 * @property string $title
 * @property string $Detail
 * @property int $recipepart_id
 * 
 * @property Recipepart $recipepart
 *
 * @package App\Models
 */
class Step extends Model
{
	protected $table = 'steps';
	public $timestamps = false;

	protected $casts = [
		'stepnumber' => 'int',
		'recipepart_id' => 'int'
	];

	protected $fillable = [
		'stepnumber',
		'title',
		'Detail',
		'recipepart_id'
	];

	public function recipepart()
	{
		return $this->belongsTo(Recipepart::class);
	}
}
