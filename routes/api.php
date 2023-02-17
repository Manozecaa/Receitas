<?php

use App\HTTP\Controllers\ReceitaController;
use App\Models\Receita; //instaciado somente para criar um dado no banco a fim de teste
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/receitas', [ReceitaController::class, 'index']);
Route::get('/receitas/{id}', [ReceitaController::class, 'show']);
Route::get('/receitas/search/{$nome}', [ReceitaController::class, 'search']);
Route::post('/receitas',[ReceitaController::class, 'store']);
Route::put('/receitas/{id}',[ReceitaController::class, 'update']);
Route::delete('/receitas/{id}', [ReceitaController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
