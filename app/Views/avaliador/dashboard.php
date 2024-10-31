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
            margin: 5px 0;
            margin-top:-50px
        }

        
        .btn-custom {
            display: block;
            width: 70%;
            margin: 8px auto;
            padding:45px;
            border-radius: 8px;
            background-color: grey;
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


        
        
        .voltar-btn {
        position: relative;
        top: -1px; /* Ajuste conforme necessário */
        }
            
        button{
            display: block;
            padding: 5px 15px;
            margin: 10px auto;
            font-size: 18px;
            border-radius: 25px;
            font-weight: bold;
            background-color: #205483;
            color: #fff;
            width: fit-content;
            border: 2px solid #00456b;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        button:hover{
        transform:scale(1.1);
        }
        .btn-trabalhos{
            margin-top:93px
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
        
    
        </div>

        <!-- Botões do Dashboard -->
        <div class="btn-trabalhos">
        <a href="<?= site_url('avaliacao') ?>" class="btn btn-custom">Trabalho 1</a>
        <a href="<?= site_url('trabalhos/alterar') ?>" class="btn btn-custom">Trabalho 2</a>
        <a href="<?= site_url('resultados') ?>" class="btn btn-custom">Trabalho 3</a>
        <a href="<?= site_url('usuarios') ?>" class="btn btn-custom"> Trabalho 4</a>
        
        </div>


            <button onclick="goBack()" class="voltar-btn">Voltar</button>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>


        
    

</body>
</html>
