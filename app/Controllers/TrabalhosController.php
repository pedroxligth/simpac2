<?php

namespace App\Controllers;

class TrabalhosController extends BaseController
{
    public function criar()
    {
        // Lógica para exibir o formulário de criação de trabalhos
        return view('admin/criar_trabalhos');
    }

    public function alterar()
    {
        // Lógica para exibir e processar a alteração de trabalhos existentes
        return view('admin/alterar_trabalhos');
    }
}
