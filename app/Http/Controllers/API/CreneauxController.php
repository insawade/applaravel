<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\igration;
use Illuminate\Http\Request;

class CreneauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Creneaux::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Creneaux::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function show(igration $igration)
    {
        return $igration;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igration $igration)
    {
        Creneaux::update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igration  $igration
     * @return \Illuminate\Http\Response
     */
    public function destroy(igration $igration)
    {
        $Creneaux->delete;
    }
}
