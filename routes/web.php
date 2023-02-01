<?php

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
Route::get('/{pagination?}', "App\Http\Controllers\CRUD@Selection");
Route::get('/update/{id}', "App\Http\Controllers\CRUD@remplire");
/* Route::get('/update/{id}', function ($id) {
    return view('update',['id'=>$id]);
}); */
Route::post('/update/{id}', 'App\Http\Controllers\CRUD@update');
Route::get('/admin/ajouter', function () {
    return view('insert');
});
Route::post('/admin/ajouter', 'App\Http\Controllers\CRUD@ajouter');
Route::get('/delete/{id}', 'App\Http\Controllers\CRUD@delete');