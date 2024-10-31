<?php

namespace App\Controllers;

class AvaliacaoController extends BaseController
{
    public function index()
    {
        // Lógica para exibir os resultados do simpósio
        return view('avaliacao');
    }
}
