<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

// Agrupación de Rutas:
Route::controller(CursoController::class)->group(function () {
  Route::get('cursos',  'index'); /* versión 10 */
  // Route::get('cursos', 'CursoController@index'); /* Versión 7 */
  Route::get('cursos/create', 'create');
  Route::get('cursos/{curso}', 'show');
  Route::get('cursos/{curso}/delete', 'delete');
  Route::get('cursos/{curso}/{categoria?}', 'category');
});
