<?php

namespace App\Http\Controllers;

use App\Models\voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'esai';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function show(voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function edit(voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function destroy(voiture $voiture)
    {
        //
    }
}
