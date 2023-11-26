<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\forgotPass;
use App\Http\Controllers\forgotPassController;
use App\Http\Controllers\VerificationController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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


// Route::get('/', function () {
//     return view('index');
// });


 Route::get('/signin', [AuthController::class, 'signinpage'])->name('login');
Route::post('/signin', [AuthController::class, 'signIn']);
Route::get('/signup', [AuthController::class, 'signup'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);
Route::get('/', [DashboardController::class, 'index'])->name('welcome');
Route::get('/verify/{token}', [VerificationController::class, 'verify'])->name('verify');
Route::get('/resetPass',[forgotPass::class,'forgotpasspage'])->name('resetPass');
Route::post('/resetPass',[forgotPass::class,'replace']);



            // <a href="{{ $tokenLink }}" class="button">Complete Registration</a>
