<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Models\crud;
use App\Http\Controllers\crudscontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    return view('create');
});
route::get('users-store',[crudscontroller::class,'store']);

route::get('/show',[crudscontroller::class,'index']);

route::get('delete/{id}',[crudscontroller::class,'destroy']);

route::get('edit/{id}',[crudscontroller::class,'edit']);

route::get('users-update/{id}',[crudscontroller::class,'update']);

Route::get('/register', function () {
    return view('create');
});

Route::get('/login', function () {
    return view('log');
});


Route::get('/create', function () {
    return view('create');
});
