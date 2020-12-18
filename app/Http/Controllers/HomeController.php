<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct(Request $request)
    {
        $seqment = $request->segment(1);
        if ($seqment == 'home') {
            $this->middleware('verified');
        }
    }

    public function index()
    {
        $data['restaurants'] = Restaurant::orderBy('created_at', 'desc')->take(3)->get();
        return view('front.index', $data);
    }

    public function search(Request $request)
    {
        $restaurants = Restaurant::where('restaurant_name', 'LIKE', "%{$request->search}%")->paginate(15);
        return view('front.restaurant.index', compact('restaurants'));
    }
}
