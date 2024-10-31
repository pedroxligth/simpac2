<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TrabalhoModel;

class Avaliador extends BaseController
{
    // Método para exibir o dashboard do avaliador
    public function dashboard()
    {
        // Instancia o modelo de Trabalho
        $trabalhoModel = new TrabalhoModel();
        $trabalhos = $trabalhoModel->findAll(); // Busca todos os trabalhos

        // Retorna a view do dashboard com os trabalhos
        return view('avaliador/dashboard', ['trabalhos' => $trabalhos]);
    }

    // Método para exibir a página de login do avaliador
    public function login()
    {
        return view('login_avaliador'); // Página de login do avaliador
    }

    // Método para autenticar o avaliador
    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $model->where('username', $username)->first();

        // Verifica se o usuário existe e se a senha está correta
        if ($user && password_verify($password, $user['password'])) {
            // Sucesso no login, inicia a sessão
            session()->set(['user_id' => $user['id'], 'role' => $user['role']]);

            // Redireciona com base no papel do usuário
            return redirect()->to('/avaliador/dashboard');
        } else {
            // Credenciais inválidas
            return redirect()->back()->with('error', 'Credenciais inválidas');
        }
    }

    // Método para logout do avaliador
    public function logout()
    {
        session()->destroy(); // Destrói a sessão
        return redirect()->to('/avaliador/login')->with('success', 'Logout realizado com sucesso.');
    }

    // Método para avaliar um trabalho
    public function avaliar($id)
    {
        $trabalhoModel = new TrabalhoModel();
        $trabalho = $trabalhoModel->find($id); // Busca o trabalho pelo ID

        if (!$trabalho) {
            return redirect()->to('/avaliador/dashboard')->with('error', 'Trabalho não encontrado.');
        }

        // Verifica se o método da requisição é POST para processar a avaliação
        if ($this->request->getMethod() === 'post') {
            // Coleta as notas e comentários da avaliação
            $nota = $this->request->getPost('nota');
            $comentario = $this->request->getPost('comentario');

            // Dados para atualizar a avaliação
            $data = [
                'avaliado' => true,
                'nota' => $nota, // Assumindo que você tem um campo 'nota' na tabela 'trabalhos'
                'comentario' => $comentario // Assumindo que você tem um campo 'comentario'
            ];
            
            // Atualiza o trabalho com as informações da avaliação
            $trabalhoModel->update($id, $data);

            // Redireciona para o dashboard e exibe a mensagem de sucesso
            return redirect()->to('/avaliador/dashboard')->with('success', 'Avaliação enviada com sucesso!');
        }

        // Caso não seja uma requisição POST, redireciona de volta
        return redirect()->to('/avaliador/dashboard')->with('error', 'Método não permitido.');
    }
}
