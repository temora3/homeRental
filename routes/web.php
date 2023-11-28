<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;
// use App\Http\Controllers\availableController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/ 

Route::get('/',[searchController::class ,'index'])->name('search');
Route::post('/',[searchController::class ,'search']);

