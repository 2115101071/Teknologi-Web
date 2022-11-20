<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\HomeController;

/*Route::get('/',[HomeController::class,'index']);
Route::get('/kalkulator',[PengenalanController::class,'index']);
Route::get('/hasil',[PengenalanController::class,'hasil']);*/

Route::get('/kalkulator',[PengenalanController::class,'index']);
Route::get('/kalkulator',[HomeController::class, 'index']);
Route::get('/output',[HomeController::class, 'kalkulator']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
