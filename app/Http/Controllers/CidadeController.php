<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCidadeRequest;
use App\Http\Requests\UpdateCidadeRequest;
use App\Models\Cidade;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidade = Cidade::all();

      return response()->json([
          'Status'=>true,
          'message'=>"Lista de Cidade",
          'data'=>$cidade
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
     * @param  \App\Http\Requests\StoreCidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCidadeRequest $request){

        try {
            $cidade = Cidade::create($request->all());
            return response()->json([
            'success'=>true,
            'message'=>"Cidade adicionada com sucesso",
            'data'=>$cidade
        ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade){

        try {
            $cidade = Cidade::find($cidade);
            return response()->json([
            'status' => true,
            'data' => $cidade],
            200);
        }
        catch (\Exception $th){
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCidadeRequest  $request
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCidadeRequest $request, Cidade $cidade){

        try {
            $cidade->update($request->all());
            return response()->json([
                'success'=>true,
                'message'=>"Cidade actualizada com sucesso",
                'data'=>$cidade
            ],200);
        }
        catch (\Throwable $th) {

            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        try {
            $cidade->delete();
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
