<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
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
        $actors= Actor::latest()->paginate(5);
        return view('actors.index',compact('actors'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
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
            'name' => 'required',
            'bio' => 'required',
            'birthdate' => 'required',
            'listmovies' => 'required',
            'image' => 'required',
            
        ]);
        //Actor::create($request->all());

        $file=$request->file('image');
        if($file->isvalid())
      {
          $destinationpath='img/';
          $image=date('ymdHis').'.'.$file->getClientOriginalExtension();
          $file->move($destinationpath,$image);
      } 
      $actor=new Actor();
      $actor->name=$request->get('name');          
      $actor->bio=$request->get('bio');
      $actor->birthdate=$request->get('birthdate');
      $actor->listmovies=$request->get('listmovies');
      $actor->image=$image;
      $actor->save();         

      return redirect()->route('actors.index')
            ->with('success', 'actors created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Actor $actor)
    {
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'birthdate' => 'required',
            'listmovies' => 'required',
        ]);
        $actor->update($request->all());

        return redirect()->route('actors.index')
            ->with('success', 'actor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();

        return redirect()->route('actors.index')
            ->with('success', 'actor deleted successfully');
    }
}
