<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        /* Estilo do header com a logo da Univicosa */
        header {
            padding: 20px 0;
            
        }

        .logo-univicosa {
            max-width: 150px;
        }

        /* Estilo da imagem do Simpac como título */
        .logo-simpac {
            max-width: 200px;
            margin: 20px 0;
        }

        
        .btn-custom {
            display: block;
            width: 70%;
            margin: 10px auto;
            padding: 12px;
            border-radius: 20px;
            background-color: #205483;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border: 2px solid #00385f;
        }

        .btn-custom:hover {
            
            transform: scale(1.05);
            color: white; /* Garante que o texto permaneça branco */
        }

        /* Estilo dos botões pequenos para Iniciar/Terminar Simpósio */
        .btn-small {
            width: 35%;
        }

        /* Flexbox para alinhar os botões Iniciar e Terminar Simpósio */
        .btn-row {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        

       
    </style>
</head>
<body>

    <!-- Header com a logo da Univicosa -->
    <header>
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Univicosa" class="logo-univicosa">
    </header>

    <div class="container">
        
        <img src="<?= base_url('assets/images/simpac.png') ?>" alt="Logo Simpac" class="logo-simpac">

        <!-- Flex container para os botões de iniciar e terminar simpósio -->
        <div class="btn-row">
        <a href="<?= site_url('simposio/iniciar') ?>" class="btn btn-custom btn-small">Iniciar Simpósio</a>
        <a href="<?= site_url('simposio/terminar') ?>" class="btn btn-custom btn-small">Terminar Simpósio</a>
        </div>

        <!-- Botões do Dashboard -->
        <div>
        
        <a href="<?= site_url('trabalhos/criar') ?>" class="btn btn-custom">Criar Trabalhos</a>
        <a href="<?= site_url('trabalhos/alterar') ?>" class="btn btn-custom">Alterar Trabalhos</a>
        <a href="<?= site_url('resultados') ?>" class="btn btn-custom">Resultados</a>
        <a href="<?= site_url('usuarios') ?>" class="btn btn-custom">Avaliadores Cadastrados</a>
        </div>


            <button onclick="goBack()" class="btn btn-custom">Voltar</button>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>


        
    

</body>
</html>
