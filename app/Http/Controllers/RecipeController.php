<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Recipepart;
use Illuminate\Http\Request;

class RecipeController extends Controller
{




    public function category()
    {
        return view('category', [
            'categories' =>  Category::all()
        ]);
    }




    public function show($categoryid)
    {

       $recipes = Recipe::where('category_id', '=' , $categoryid )->get();

       return view('recipes-by-category', ['recipes' => $recipes]);

    }



    public function singleRecipe($recipeid)
    {
        $recipe = Recipe::find($recipeid);

        $steps = Recipe::getSteps($recipeid);

        $parts = Recipe::getParts($recipeid);





        return view('single-recipe',
            [
                'recipe' => $recipe,
                'steps' => $steps,
                'parts' => $parts
            ]);

    }

    public function allRecipes()
    {
        return view('all-recipes', [
            'recipes' =>  Recipe::all()

        ]);
    }

}
