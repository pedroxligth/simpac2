<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        header {
            text-align: center;
            padding: 20px 0;
        }

        /* General page layout */
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 120vh; /* Increase the height to make the footer initially hidden */
            margin: 0;
            background-color: #fff;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 10px;
        }

        /* Image container for XV and Simpac */
        .img-container {
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column; /* Empilha as imagens uma sobre a outra */
            align-items: center;
        }

        .img-container img {
            max-width: 200px; /* Ajuste o tamanho das imagens */
            margin: 10px 0; /* Margem padrão entre as imagens */
        }

        .img-container img:nth-child(2) {
            margin-top: -110px; /* Aproxima a imagem Simpac da XV */
        }

        /* Login Form and Button Styling */
        .content {
            text-align: center;
            flex-grow: 1;
            width: 100%;
            max-width: 500px; /* Tamanho máximo do formulário */
            margin: 0 auto; /* Centraliza o conteúdo */
            background-color: transparent; /* Remover o fundo do formulário */
        }

        h1, h2 {
            text-align: center;
            color: #00AFEF; /* Cor azul */
            margin-top: 10px;
            font-weight: bold;
        }

        h1 {
            font-size: 28px; /* Reduzido o tamanho do título principal */
        }

        h2 {
            font-size: 20px; /* Reduzido o tamanho do subtítulo */
        }

        input[type="text"], input[type="password"] {
            width: 70%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            color: #333;
        }

        /* Submit button styling */
        button {
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

        button:hover {
            transform: scale(1.1);
            border-color: #00385f;
        }

        /* Error message styling */
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Footer styling */
        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
            font-weight: bold;
            margin-top: auto; /* Ensures footer stays at the bottom when content is small */
        }

        footer img {
            max-width: 80px;
            margin-top: 10px;
        }
        .voltar-btn {
    position: relative;
    top: -180px; /* Ajuste conforme necessário */
}

    </style>
</head>
<body>
    <header>
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Univiçosa" class="logo">
    </header>

    <div class="img-container">
        <img src="<?= base_url('assets/images/XV.png') ?>" alt="Imagem XV" class="xv-img">
        <img src="<?= base_url('assets/images/Simpac.png') ?>" alt="Imagem Simpac" class="simpac-img">
    </div>
    
    <h1>Portal do Admin</h1>
    <h2>BOAS VINDAS</h2>

    <!-- Login Form -->
    <div class="content">
        

        <!-- Flash error message -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error-message"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= site_url('login/authenticate') ?>" method="post">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button href="<?= site_url('resultados') ?>" type="submit">Entrar</button>
        </form>
    </div>
        <button onclick="goBack()" class="voltar-btn">Voltar</button>

    <script>
    function goBack() {
        window.history.back();
}
</script>

    <footer>
    <p>Univiçosa<br> contato@univicosa.com.br<br> (31) 3899-8000<br> Viçosa - MG</p>
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Univiçosa">
    </footer>
</body>
</html>
