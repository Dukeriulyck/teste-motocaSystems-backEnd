<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rotas das categorias
Route::get('/categorias',[CategoriaController::class,'index']);
Route::get('/categorias/{id}',[CategoriaController::class,'getById']);
Route::post('/categorias',[CategoriaController::class,'store']);
Route::delete('/categorias/{id}',[CategoriaController::class,'destroy']);
Route::put('/categorias/{id}',[CategoriaController::class,'update']);

//Rotas dos produtos
Route::get('/produtos',[ProdutosController::class,'index']);
Route::get('/produtos/{id}',[ProdutosController::class,'getById']);
Route::post('/produtos',[ProdutosController::class,'store']);
Route::delete('/produtos/{id}',[ProdutosController::class,'destroy']);
Route::put('/produtos/{id}',[ProdutosController::class,'update']);
