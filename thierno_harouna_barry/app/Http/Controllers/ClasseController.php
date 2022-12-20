<?php

namespace App\Http\Controllers;

use App\Models\classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = classe::all();
        return view('classe.liste',compact('classe'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
        return view('classe.add');
   
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
            'nom_class'=>'required',
            'frais_inscription'=>'required',
            'mensualite'=>'required',
            'frais_tenu'=>'required',
            'frais_amical'=>'required',
    ]);

        $classe=new classe;
        $classe->nom_class=$request->nom_class;
        $classe->frais_inscription=$request->frais_inscription;
        $classe->mensualite=$request->mensualite;
        $classe->frais_tenu=$request->frais_tenu;
        $classe->frais_amical=$request->frais_amical;
        $save=$classe->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(classe $classe)
    {
       
        return view('classe.edite',compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classe $classe)
    {
        $request->validate([
            'nom_class'=>'required',
            'frais_inscription'=>'required',
            'mensualite'=>'required',
            'frais_tenu'=>'required',
            'frais_amical'=>'required',
    ]);
        $modifier = classe::find($classe->id);
        $modifier->nom_class=$request->nom_class;
        $modifier->frais_inscription=$request->frais_inscription;
        $modifier->mensualite=$request->mensualite;
        $modifier->frais_tenu=$request->frais_tenu;
        $modifier->frais_amical=$request->frais_amical;

        $modifier->save();
        
        if($modifier){
            return redirect(route('classe.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(classe $classe)
    {
        $classe->delete();
 
        return redirect(route('classe.index'));
    }
}
