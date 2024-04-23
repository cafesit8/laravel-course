<?php

use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CursoController::class)->group(function() {
  Route::get('/cursos', 'index');
  Route::get('/cursos/{id}', 'show');
  Route::post('/cursos', 'create');
  Route::delete('/cursos/{id}', 'destroy');
  Route::patch('/cursos/{id}', 'updatePartial');
});
