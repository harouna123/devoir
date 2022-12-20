<?php

namespace App\Http\Controllers;

use App\Models\encaisser;
use App\Models\caisse;
use App\Models\etudiant;
use Illuminate\Http\Request;

class EncaisserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encaisser = encaisser::all();
        return view('encaisser.liste',compact('encaisser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caisse=caisse::all();
        $etudiant=etudiant::all();
        return view('encaisser.add',compact('caisse','etudiant'));
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
            'caisse_id'=>'required',
            'etudiant_id'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'heure_encaisse'=>'required',
           
    ]);

        $encaisser=new encaisser;
        $encaisser->caisse_id=$request->caisse_id;
        $encaisser->etudiant_id=$request->etudiant_id;
        $encaisser->date_debut=$request->date_debut;
        $encaisser->date_fin=$request->date_fin;
        $encaisser->heure_encaisse=$request->heure_encaisse;

       
        $save=$encaisser->save();
        if($save){
            return redirect(route('encaisser.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function show(encaisser $encaisser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function edit(encaisser $encaisser)
    {
        $caisse = caisse::all();
        $etudiant = etudiant::all();
        return view('encaisser.edite',compact('encaisser','etudiant','caisse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encaisser $encaisser)
    {
        $request->validate([
            'caisse_id'=>'required',
            'etudiant_id'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'heure_encaisse'=>'required',

           
    ]);
        $modifier = encaisser::find($encaisser->id);
        $modifier->caisse_id=$request->caisse_id;
        $modifier->etudiant_id=$request->etudiant_id;
        $modifier->date_debut=$request->date_debut;
        $modifier->date_fin=$request->date_fin;
        $modifier->heure_encaisse=$request->heure_encaisse;
        
        $modifier->save();
        
        if($modifier){
            return redirect(route('encaisser.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function destroy(encaisser $encaisser)
    {
        $encaisser->delete();
 
        return redirect(route('encaisser.index'));
    }
}
