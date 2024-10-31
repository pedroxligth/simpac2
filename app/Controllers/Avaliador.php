<?php namespace App\Controllers;

use App\Models\UserModel;

class Avaliador extends BaseController
{
    public function dashboard()
    {
        // Aqui você pode retornar a view da dashboard do avaliador
        return view('avaliador/dashboard');
    }

    public function login()
    {
        return view('login_avaliador'); // Página de login do avaliador
    }

    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $model->where('username', $username)->first();

        // Permitir que o avaliador acesse tanto a área do avaliador quanto a do admin
        if ($user && password_verify($password, $user['password'])) {
            // Sucesso no login
            session()->set(['user_id' => $user['id'], 'role' => $user['role']]);
            
            if ($user['role'] == 'admin') {
                return redirect()->to('/avaliador/dashboard');
            } else if ($user['role'] == 'avaliador') {
                return redirect()->to('/avaliador/dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Credenciais inválidas');
        }
    }
}
