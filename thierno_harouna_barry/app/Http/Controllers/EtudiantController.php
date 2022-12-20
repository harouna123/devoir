<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $etudiant = etudiant::all();
        return view('etudiant.liste',compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = classe::all();
        return view('etudiant.add',compact('classe'));
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
            'nom'=>'required',
            'prenom'=>'required',
            'naissance'=>'required',
            'lieu'=>'required',
            'sexe'=>'required',
            'diplome'=>'required',
            'nom_tuteur'=>'required',
            'classe_id'=>'required',
    ]);

        $etudiant=new etudiant;
        $etudiant->nom=$request->nom;
        $etudiant->prenom=$request->prenom;
        $etudiant->naissance=$request->naissance;
        $etudiant->lieu=$request->lieu;
        $etudiant->sexe=$request->sexe;
        $etudiant->diplome=$request->diplome;
        $etudiant->nom_tuteur=$request->nom_tuteur;
        $etudiant->classe_id=$request->classe_id;
        $save=$etudiant->save();
        if($save){
            return redirect(route('etudiant.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiant $etudiant)
    {
        $classe= classe::all();
        $etudiant = etudiant::find($etudiant->id);
        return view('etudiant.edite',compact('etudiant','classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiant $etudiant)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'naissance'=>'required',

            'sexe'=>'required',
            'lieu'=>'required',
            'diplome'=>'required',

            'nom_titeur'=>'required',
            'classe_id'=>'required',
           
            
        ]); 
        $modifier = etudiant::find($etudiant->id);
        $modifier->nom=$request->nom;
        $modifier->prenom=$request->prenom;
        $modifier->naissance=$request->naissance;
        $modifier->sexe=$request->sexe;
        $modifier->lieu=$request->lieu;
        $modifier->diplome=$request->diplome;
        $modifier->nom_titeur=$request->nom_titeur;
        $modifier->classe_id=$request->classe_id;





        $modifier->save();
        
        if($modifier){
            return redirect(route('etudiant.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiant $etudiant)
    {
        $etudiant->delete();
 
        return redirect(route('etudiant.index'));
    }
}
