<?php

namespace App\Http\Controllers;

use App\Models\marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marque.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marque = marque::create([
           ' libelle'=>$request->libelle,
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function show(marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function edit(marque $marque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marque $marque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function destroy(marque $marque)
    {
        //
    }
}
