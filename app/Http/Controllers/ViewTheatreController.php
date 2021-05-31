<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theatres;

class ViewTheatreController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth', ['except' => ['welcome', 'show']]);
    }
    
    public function viewshow()
    {
        $theatres = Theatres::latest()->paginate(5);
        return view('theatreshow',compact('theatres'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
