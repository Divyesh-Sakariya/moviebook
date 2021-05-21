<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class ViewController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['welcome', 'show']]);
    }

    public function index() {
        $movies = Movie::latest()->simplepaginate(5);
        return view('view_movies',compact('movies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $movies = DB::select('select * from movies');
        // return view('view_movies',['movies'=>$movies]);
    }

    public function viewseat(Movie $movie)
    {
        return view('seats', compact('movie'));        
    }
}
