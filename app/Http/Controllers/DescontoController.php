<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDescontoRequest;
use App\Http\Requests\UpdateDescontoRequest;
use App\Models\Desconto;

class DescontoController extends Controller
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
     * @param  \App\Http\Requests\StoreDescontoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDescontoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desconto  $desconto
     * @return \Illuminate\Http\Response
     */
    public function show(Desconto $desconto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desconto  $desconto
     * @return \Illuminate\Http\Response
     */
    public function edit(Desconto $desconto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDescontoRequest  $request
     * @param  \App\Models\Desconto  $desconto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDescontoRequest $request, Desconto $desconto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desconto  $desconto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desconto $desconto)
    {
        //
    }
}
