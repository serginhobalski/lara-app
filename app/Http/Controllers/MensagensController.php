<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagensController extends Controller
{

    public function index()
    {
        $data = [
            'titulo' => 'Mensagens',
            'slug' => 'index'
        ];
        return view('mensagens.index', $data);
    }

    public function criar()
    {
        return view('mensagens.criar', ['titulo' => 'Escrever Mensagem', 'slug' => 'criar']);
    }

    public function exibir()
    {
        return view('mensagens.exibir', ['titulo' => 'Detalhes da Mensagem', 'slug' => 'exibir']);
    }

    public function enviadas()
    {
        $data = ['titulo' => 'Mensagens enviadas', 'slug' => 'enviadas'];
        return view('mensagens.enviadas', $data);
    }

    public function lixeira()
    {
        $data = [
            'titulo' => 'Mensagens excluídas',
            'slug' => 'lixeira'
        ];
        return view('mensagens.lixeira', $data);
    }
}
