<?php

use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Bienvenido a Laravel. Repaso";
    return view('welcome');
});

/* Hacer las rutas de una manera simple
Route::get('studies', [StudyController::class, 'index']);
Route::get('studies/{name}/{surname}', [StudyController::class, 'hello']);
*/

Route::resource('studies', StudyController::class); 
// resource son 7 rutas