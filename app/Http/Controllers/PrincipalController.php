<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $data = [
            'titulo' => 'Principal',
        ];
        return view('site.principal', $data);
    }


    public function seec()
    {
        $data = [
            'titulo' => 'SEEC-PA',
            'subtitulo' => 'Secretaria Estadual de Educacção e Cultura do Pará',
        ];
        return view('site.seec', $data);
    }


    public function itq()
    {
        $data = [
            'titulo' => 'ITQ',
            'subtitulo' => 'Instituto Teológico Quadrangular',
        ];
        return view('site.itq', $data);
    }


    public function postulantes()
    {
        $data = [
            'titulo' => 'Curso de Postulantes',
            'subtitulo' => 'Preparando para o ministério',
        ];
        return view('site.postulantes', $data);
    }
}
