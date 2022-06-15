<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampanhaRequest;
use App\Http\Requests\UpdateCampanhaRequest;
use App\Models\Campanha;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCampanhaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampanhaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Campanha $campanha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function edit(Campanha $campanha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampanhaRequest  $request
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampanhaRequest $request, Campanha $campanha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $campanha)
    {
        //
    }
}
