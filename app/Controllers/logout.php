<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Logout extends Controller
{
    // Função para fazer logout
    public function index()
    {
        session()->destroy(); // Destrói a sessão
        return redirect()->to('/login'); // Redireciona para a página de login
    }
}
