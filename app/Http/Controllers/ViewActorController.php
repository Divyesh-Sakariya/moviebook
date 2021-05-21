<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ViewActorController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['welcome', 'show']]);
    }

    public function index() {
        $actors = Actor::latest()->simplepaginate(5);
        return view('view_actor',compact('actors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $movies = DB::select('select * from movies');
        // return view('view_movies',['movies'=>$movies]);
    }
}
