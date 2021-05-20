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

Route::get('/', [\App\Http\Controllers\VideoController::class,'index']);

Route::get('/uploader', [\App\Http\Controllers\VideoController::class,'uploader'])->name('uploader');

Route::post('/upload', [\App\Http\Controllers\VideoController::class,'store'])->name('upload');