<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class ViewController extends Controller
{
    public function index() {
        $movies = Movie::latest()->paginate(5);
        return view('view_movies',compact('movies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $movies = DB::select('select * from movies');
        // return view('view_movies',['movies'=>$movies]);
    }
}
