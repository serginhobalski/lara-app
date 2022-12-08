<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function eventos()
    {
        return view('site.eventos', ['titulo' => 'Eventos SEEC-PA']);
    }
}
