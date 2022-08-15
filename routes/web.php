<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add;
use App\Http\Controllers\AppartController;

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
    return view('Accueil');
});


Route::get('/Location', function () {
    return view('Location');
});
Route::get('/Admin', function () {
    return view('Admin');
});
Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Propos', function () {
    return view('Propos');
});

Route::get('/add', function () {
    return view('add');
});

Route::view('add','add');
Route::post('add',[add::class,'addHouse']);

Route::get('list',[App\Http\Controllers\AppartController::class,'list']);
Route::get('delete/{id}',[App\Http\Controllers\AppartController::class,'delete']);
Route::get('edit/{id}',[App\Http\Controllers\AppartController::class,'showData']);
Route::post('edit',[App\Http\Controllers\AppartController::class,'update']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/Location',[App\Http\Controllers\add::class, 'index'])->name('Location');
