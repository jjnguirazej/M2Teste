<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDescontoRequest;
use App\Http\Requests\UpdateDescontoRequest;
use App\Models\Desconto;
use App\Models\Produto;

class DescontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desconto = Desconto::all();

        return response()->json([
            'Status'=>true,
            'message'=>"Lista de Desconto",
            'data'=>$desconto
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
     * @param  \App\Http\Requests\StoreDescontoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDescontoRequest $request)
    {
        try {

            $desconto = new Desconto();
            $desconto-> id_campanha = $request->id_campanha;
            $desconto-> nome = $request->nome;
            $desconto-> valor_desconco = $request->valor_desconco;
            $desconto->save();

            $precos = Produto::select('preco')->where('id_campanha', $request->id_campanha)->get('preco');
            foreach ($precos as $preco){
                $preco->preco = $preco->preco - $request->valor_desconco;
                $preco->save();
                // Produto::where('id_campanha',$request->id_campanha)->update(['preco'=>$preco->preco - $request->valor_desconco]);
            }
            
            return response()->json([
            'success'=>true,
            'message'=>"Desconto adicionado com sucesso",


        ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
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
        try {
            $desconto->update($request->nome);
            return response()->json([
                'success'=>true,
                'message'=>"Desconto actualizado com sucesso",
                'data'=>$$desconto
            ],200);
        }
        catch (\Throwable $th) {

            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desconto  $desconto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desconto $desconto)
    {
        try {
            $desconto->delete();

            $precos = Produto::select('preco')->where('id_campanha', $desconto->id_campanha)->get('preco');
            foreach ($precos as $preco){
                $preco->preco = $preco->preco + $desconto->valor_desconco;
                $preco->save();
            }
            return response()->json([
                'success'=>true,
                'message'=>"Desconto apagado com sucesso",

            ],200);
        }
        catch (\Throwable $th) {
            return response()->json(['response'=>['message'=>false, 'data'=>null ,'exception'=>$th->getMessage()]],500);

        }
    }
}
