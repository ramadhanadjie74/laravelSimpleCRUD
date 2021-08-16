<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\karyawanController;
use App\Http\Controllers\dataController;

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

Route::get('/', function(){
    return view('pages.list');
});

Route::get('/data', function(){
    return view('pages.data');
});

// Route::view('/data','data');
// Route::view('/','pages.list');

Route::get('/', [karyawanController::class,'show']);

Route::get('/update/{NoKtp}', [karyawanController::class,'edit']);
Route::post('/update/{NoKtp}', [karyawanController::class,'update']);

Route::get('/delete/{NoKtp}', [karyawanController::class,'delete']);

Route::post('submit', [karyawanController::class,'addData']);

