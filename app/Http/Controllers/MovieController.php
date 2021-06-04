<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Auth;

class MovieController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['welcome', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->simplepaginate(5);
        return view('movies.index',compact('movies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required',
            'overview' => 'required',
            'year' => 'required',
            'runtime' => 'required',
            'cast' => 'required',
            'image' => 'required',
        ]);
        // Movie::create($request->all());
        $file=$request->file('image');
            if($file->isvalid())
          {
              $destinationpath='img/';
              $image=date('ymdHis').'.'.$file->getClientOriginalExtension();
              $file->move($destinationpath,$image);
          } 
          $movie=new Movie();
          $movie->movie_name=$request->get('movie_name');          
          $movie->overview=$request->get('overview');
          $movie->year=$request->get('year');
          $movie->runtime=$request->get('runtime');
          $movie->cast=$request->get('cast');
          $movie->image=$image;
          $movie->save();                 
             
        return redirect()->route('movies.index')
                        ->with('success','Movie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'movie_name' => 'required',
            'overview' => 'required',
            'year' => 'required',
            'runtime' => 'required',
            'cast' => 'required',
        ]);
    
        $movie->update($request->all());
    
        return redirect()->route('movies.index')
                        ->with('success','movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    
        return redirect()->route('movies.index')
                        ->with('success','movie deleted successfully');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
