<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//  Route::get('/signin', [AuthController::class, 'signin'])->name('login');
// require __DIR__.'/auth.php';
 Route::get('/signin', [AuthController::class, 'signinp'])->name('login');
Route::post('/signin', [AuthController::class, 'signIn']);
Route::get('/signup', [AuthController::class, 'signup'])->name('register');
Route::post('/signup', [AuthController::class, 'register']);
Route::get('/', [Controller::class, 'index'])->name('welcome');
Route::get('/verify/{token}', [VerificationController::class, 'verify'])->name('verify');



            // <a href="{{ $tokenLink }}" class="button">Complete Registration</a>
