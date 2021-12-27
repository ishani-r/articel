<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Artical;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // if(count($like)>0)
        // {
        //     dd('yes');
        // }
        // else{
        //     dd('no');
        // }
        $artical = Artical::all();
        // $like = Like::where('user_id', Auth::user()->id)->where('article_id', '1')->get();
        return view('home', compact('artical'));
    }
}
