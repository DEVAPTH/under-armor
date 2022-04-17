<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

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

Route::middleware(['auth:sanctum'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');


});

Route::middleware(['auth:sanctum'])->group(function(){
     //Category
    Route::resource('categories',CategoryController::class);
    //Brand
    Route::resource('brands',BrandController::class);

});

