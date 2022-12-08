<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function painel()
    {
        return view('cursos.painel', ['titulo' => 'Painel do Aluno']);
    }

    public function curso()
    {
        return view('cursos.curso', ['titulo' => 'Área do Curso']);
    }

    public function aula()
    {
        return view('cursos.aula', ['titulo' => 'Aula do Curso']);
    }
}
