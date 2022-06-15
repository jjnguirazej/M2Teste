<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGrupoCidadeRequest;
use App\Http\Requests\UpdateGrupoCidadeRequest;
use App\Models\GrupoCidade;

class GrupoCidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupoCidade = GrupoCidade::all();

        return response()->json([
            'Status'=>true,
            'message'=>"Lista de Grupos de Cidade",
            'data'=>$grupoCidade
        ],200);
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
     * @param  \App\Http\Requests\StoreGrupoCidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrupoCidadeRequest $request)
    {
        try {
            $grupoCidade = GrupoCidade::create($request->all());
            return response()->json([
            'success'=>true,
            'message'=>"Grupo adicionado com sucesso",
            'data'=>$grupoCidade
        ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrupoCidade  $grupoCidade
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoCidade $grupoCidade)
    {
        try {
            $grupoCidade = GrupoCidade::find($grupoCidade);
            return response()->json([
            'status' => true,
            'data' => $grupoCidade],
            200);
        }
        catch (\Exception $th){
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrupoCidade  $grupoCidade
     * @return \Illuminate\Http\Response
     */
    public function edit(GrupoCidade $grupoCidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupoCidadeRequest  $request
     * @param  \App\Models\GrupoCidade  $grupoCidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrupoCidadeRequest $request, GrupoCidade $grupoCidade)
    {
        try {
            $grupoCidade->update($request->all());
            return response()->json([
                'success'=>true,
                'message'=>"Grupo de Cidade actualizada com sucesso",
                'data'=>$grupoCidade
            ],200);
        }
        catch (\Throwable $th) {

            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrupoCidade  $grupoCidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoCidade $grupoCidade)
    {
        try {
            $grupoCidade->delete();
            return response()->json([
                'success'=>true,
                'message'=>"Cidade apagada com sucesso",

            ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }
}
