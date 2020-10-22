<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UploadImageController;
use App\http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UploadImageController::class, 'index']);
Route::post('/upload/', [UploadImageController::class, 'upload']);
Route::get('login/github', [LoginController::class, 'redirectToProvider']);
Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
