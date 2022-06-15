<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\GrupoCidadeController;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::ApiResource('cidades', CidadeController::class);

Route::ApiResource('grupo-cidades', GrupoCidadeController::class);

Route::ApiResource('campanhas', CampanhaController::class);

Route::ApiResource('produtos', ProdutoController::class);

