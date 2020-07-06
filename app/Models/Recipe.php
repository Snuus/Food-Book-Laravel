<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use DB;
use App\models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 *
 * @property int $id
 * @property string $name
 * @property string $body
 * @property int $user_id
 * @property int $category_id
 * @property bool $public
 *
 * @property User $user
 * @property Category $category
 * @property Collection|RecipeRecipepart[] $recipe_recipeparts
 *
 * @package App\Models
 */
class Recipe extends Model
{
	protected $table = 'recipe';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'category_id' => 'int',
       // 'public' => 'bool'
	];

	protected $fillable = [
		'name',
		'body',
		'user_id',
		'category_id',
	//	'public'
	];


    public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function recipe_recipeparts()
	{
		return $this->hasMany(RecipeRecipepart::class);
	}

	public static function  getSteps($recipeid)
    {

        return DB::table('steps')
        ->select('steps.stepnumber','steps.title','steps.Detail','steps.recipepart_id')
        ->leftJoin('recipepart', 'recipepart.id', '=', 'steps.recipepart_id')
        ->leftJoin('recipe_recipepart', 'recipe_recipepart.recipepart_id', '=', 'steps.recipepart_id')
        ->leftJoin('recipe', 'recipe.id', '=', 'recipe_recipepart.recipe_id')
        ->where('recipe.id', $recipeid)
        ->get();

    }

    public static function  getParts($recipeid)
    {

        return DB::table('recipepart')
            ->select('recipepart.name','recipepart.duration','recipepart.text'  ,'recipepart.id')
            ->leftJoin('recipe_recipepart', 'recipe_recipepart.recipepart_id', '=', 'recipepart.id')
            ->leftJoin('recipe', 'recipe.id', '=', 'recipe_recipepart.recipe_id')
            ->where('recipe.id', $recipeid)
            ->get();

    }

}

