<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Bienvenido al módulo de cursos';
    }

    public function show($id)
    {
        return "Bienvenido al curso con ID: $id";
    }
}
