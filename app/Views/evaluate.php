<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Trabalho</title>
</head>
<body>
    <h1>Avaliar Trabalho</h1>

    <form action="<?= site_url('trabalho/evaluar/' . $trabalho['id']) ?>" method="post">
        <div>
            <label>Protocolo:</label> <?= esc($trabalho['protocolo']) ?><br>
            <label>Resumo:</label> <?= esc($trabalho['resumo']) ?><br>
            <!-- Adicione outros campos de avaliação conforme necessário -->
        </div>
        
        <button type="submit">Concluir Avaliação</button>
    </form>
    
    <a href="<?= site_url('avaliador/dashboard') ?>">Voltar para o Dashboard</a>
</body>
</html>
