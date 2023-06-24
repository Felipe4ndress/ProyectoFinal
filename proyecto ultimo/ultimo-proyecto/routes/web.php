<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ArtistaController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
route::get('/',[Homecontroller::class,'index'])->name('home.index');
route::get('/login',[Homecontroller::class,'login'])->name('home.index');


route::get('/artista',[Homecontroller::class,'index'])->name('artista.index');



