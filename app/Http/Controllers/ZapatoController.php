<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

class ZapatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Bring data from table
        $zapato= Zapato::all();
        return $zapato;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a new shoe
        $zapato= new Zapato();
        $zapato->description=$request->description;
        $zapato->size=$request->size;
        $zapato->price=$request->price;
        $zapato->stock=$request->stock;

        $zapato->save();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update the table
        $zapato = Zapato::findOrFail($request->id);
        $zapato->description=$request->description;
        $zapato->size=$request->size;
        $zapato->price=$request->price;
        $zapato->stock=$request->stock;

        $zapato->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete from table
        $zapato= Zapato::destroy($request->id);
        return $zapato;
    }
}
