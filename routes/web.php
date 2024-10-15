<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/proyectoUNO',function(){
    return view('proyectoUNO');
})->Middleware('auth','verified')->name('UNO');
Route::get('/proyectoDOS',function(){
    return view('proyectoDOS');
})->Middleware('auth')->name('DOS');
Route::get('/proyectoTRES',function(){
    return view('proyectoTRES');
})->Middleware('auth')->name('TRES');
Route::get('/proyectoCUATRO',function(){
    return view('proyectoCUATRO');
})->Middleware('auth')->name('CUATRO');
Route::get('/proyectoCINCO',function(){
    return view('proyectoCINCO');
})->Middleware('auth')->name('CINCO');



Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
