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

Route::get('/', function () {
    return view('welcome');
});

// Define translation names in Providers/AppServiceProvider
Route::resource('usuario', 'App\Http\Controllers\UserController')
    ->names('user')
    ->parameters(['usuario' => 'user']);
