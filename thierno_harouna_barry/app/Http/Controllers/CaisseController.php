<?php

namespace App\Http\Controllers;

use App\Models\caisse;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caisse = caisse::all();
        return view('caissier.liste',compact('caisse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caissier.add');
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
            'nom_caisse'=>'required',
            'prenom_caisse'=>'required',
            'niveau'=>'required',
           
    ]);

        $caisse=new caisse;
        $caisse->nom_caisse=$request->nom_caisse;
        $caisse->prenom_caisse=$request->prenom_caisse;
        $caisse->niveau=$request->niveau;
       
        $save=$caisse->save();
        if($save){
            return redirect(route('caisse.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function show(caisse $caisse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function edit(caisse $caisse)
    {
        return view('caissier.edite',compact('caisse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caisse $caisse)
    {
        $request->validate([
            'nom_caisse'=>'required',
            'prenom_caisse'=>'required',
            'niveau'=>'required',
           
    ]);
        $modifier = caisse::find($caisse->id);
        $modifier->nom_caisse=$request->nom_caisse;
        $modifier->prenom_caisse=$request->prenom_caisse;
        $modifier->niveau=$request->niveau;
        

        $modifier->save();
        
        if($modifier){
            return redirect(route('caisse.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function destroy(caisse $caisse)
    {
        $caisse->delete();
 
        return redirect(route('caisse.index'));
    }
}
