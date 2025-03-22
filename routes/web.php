<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

// Página de inicio
Route::get('/', function () {
    return view('home');
});

// Grupo de rutas para Usuarios
Route::prefix('usuarios')->group(function () {
    Route::get('/', function () { 
        return 'Bienvenido al módulo de usuarios'; 
    }); 

    Route::get('/{id}', function ($id) { 
        return "Bienvenido al perfil del usuario con ID: $id"; 
    });
});

// Grupo de rutas para Cursos (Usando CursoController)
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index');
    Route::get('/cursos/{id}', 'show');
});
