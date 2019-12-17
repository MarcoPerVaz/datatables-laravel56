<?php

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

/* Ruta / */
Route::get('/', function () {
    // $users = App\User::all(); /* Se obtiene mediante ajax desde la vista index.blade.php */
    // return view('index', compact( 'users' ));
    return view('index');
});
