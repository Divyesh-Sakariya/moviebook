<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theatres;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theatres = Theatres::latest()->paginate(5);
        return view('theatre.index',compact('theatres'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theatre.create');
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
            'starttime' => 'required',
            'endtime' => 'required',
            'price' => 'required',
            'seatsAvailable' => 'required',
            'totalseat' => 'required',
            
        ]);
        $theatre = new Theatres();
        $theatre->name = request()->name;
        $theatre->starttime = request()->starttime;
        $theatre->endtime = request()->endtime;
        $theatre->price = request()->price;
        $theatre->seatsAvailable = request()->seatsAvailable;
        $theatre->totalseat = request()->totalseat;
        $theatre->save();

        return redirect()->route('theatre.index')
        ->with('success', 'actors created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(theatres $theatre)
    {
         return view('theatre.edit', compact('theatre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theatres $theatres)
    {
        $request->validate([
            'name' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'price' => 'required',
            'seatsAvailable' => 'required',
            'totalseat' => 'required',
            
        ]);

        $theatres->update($request->all());

        return redirect()->route('theatre.index')
        ->with('success', 'actors created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theatre =Theatres::find($id)->delete();

        return redirect()->route('theatre.index')
            ->with('success', 'actor deleted successfully');
    }
}
