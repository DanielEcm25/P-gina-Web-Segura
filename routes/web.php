<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

# Vista principal
Route::get('/', function () {
    return view('home');
})->name('home');

# Vista dashboard (con nombre => top-10)
Route::get('/dashboard/{nombre}', function ($nombre){
    return view("dashboard.$nombre");
})->middleware('auth')
->name('dashboard.ir');

# Vistas series (con nombre => serie)
Route::get('/series/{nombre}', function ($nombre) {
    return view("series.$nombre");
})->name('series.ir');

# Vistas formularios (con nombre => form-visita)
Route::get('/formularios/{nombre}', function($nombre){
    return view("formularios.$nombre");
})->name('formularios.ir');

# Vistas rutas de autenticación (con nombre => login or register)
Route::get('/auth/{nombre}', function($nombre){
    return view("auth.$nombre");
})->name('auth.ir');

#Vistas rutas register
Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

#Vistas login register
Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'store'])
->middleware('throttle:5,1')
->name('login.store');

#Vista logout
Route::post('/logout',[LoginController::class,'destroy'])->name('logout');

#Rutas post
Route::middleware(['auth'])->group(function () {
    Route::resource('post', PostController::class);
});