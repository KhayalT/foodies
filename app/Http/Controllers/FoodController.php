<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index($id, $tag = null)
    {
        $tags = Tag::all();
        if ($tag == null) {
            $foods = Food::where('restaurant_id', $id)->orderBy('tag_id', 'asc')->get();
        } else {
            $foods = Food::where('restaurant_id', $id)->where('tag_id', $tag)->orderBy('tag_id', 'asc')->get();
        }

        return view('front.restaurant.menu', compact('foods', 'tags'));
    }
}
