<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('home');
});

Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::post('/post',[PostController::class,'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/post/{id}/edit',[PostController::class,'edit']);
Route::put('/post/{id}',[PostController::class,'update']);
// Route::patch('/post',[PostController::class,'update']);
Route::delete('/post/{id}',[PostController::class,'destroy']);

// Route::resource('/post',PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
