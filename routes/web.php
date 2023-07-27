<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadsController;
use App\Models\Data;
use App\Models\Image;

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
    return view('welcome' , ['images'=>Image::all() , 'Data'=> Data::get() ]);
})->name('home');

Route::post('/store' , [ImageUploadsController::class , 'store']);