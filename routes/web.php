<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/inicio', [HomeController::class, 'inicio']);
Route::get('/nosotros', [HomeController::class, 'nosotros']);
Route::get('/actividad', [HomeController::class, 'actividad']);
Route::get('/contacto', [HomeController::class, 'contacto']);
Route::get('/donacion', [HomeController::class, 'donacion']);
Route::post('inicio', [HomeController::class, 'message'])->name('inicio.message');



Auth::routes();


