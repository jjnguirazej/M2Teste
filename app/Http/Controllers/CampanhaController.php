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
        $campanha = Campanha::all();

        return response()->json([
            'Status'=>true,
            'message'=>"Lista de Campanha",
            'data'=>$campanha
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
     * @param  \App\Http\Requests\StoreCampanhaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampanhaRequest $request)
    {
        try {

            $campanha = Campanha::create($request->all());
            return response()->json([
            'success'=>true,
            'message'=>"Campanha adicionado com sucesso",
            'data'=>$campanha
        ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function show(Campanha $campanha)
    {
        try {
            $campanha = Campanha::find($campanha);
            return response()->json([
            'status' => true,
            'data' => $campanha],
            200);
        }
        catch (\Exception $th){
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
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
        try {
            $campanha->update($request->all());
            return response()->json([
                'success'=>true,
                'message'=>"Campanha actualizada com sucesso",
                'data'=>$campanha
            ],200);
        }
        catch (\Throwable $th) {

            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campanha  $campanha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanha $campanha)
    {
        try {
            $campanha->delete();
            return response()->json([
                'success'=>true,
                'message'=>"Campanha apagada com sucesso",
            ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }
}
