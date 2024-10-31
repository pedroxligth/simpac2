<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General page layout */
body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 120vh; /* Increase the height to make the footer initially hidden */
    margin: 0;
    background-color: #fff;
}

header {
    text-align: center;
    padding: 20px 0;
}

/* Logo styling */
.logo {
    max-width: 150px;
    margin-bottom: 10px;
}

/* Image container for XV and Simpac */
.img-container {
    text-align: center;
    margin: 40px 0;
    position: relative;
    height: 250px; /* Increased height for larger images */
}

/* Increased size and reduced gap between XV and Simpac */
.img-container img {
    max-width: 250px; /* Larger size for both images */
    margin: 0 10px; /* Reduced gap between the images */
}

.img-container .xv-img {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
}

.img-container .simpac-img {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

/* Buttons styling */
.content {
    text-align: center;
    flex-grow: 1;
    padding: 20px;
}

.content .btn {
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

.content .btn:hover {
    transform: scale(1.1);
    border-color: #00385f;
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

/* Logo in the footer */
footer img {
    max-width: 100px;
    margin-top: 10px;
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

    <div class="content">
        <a href="<?= site_url('login') ?>" class="btn">Admin</a>
        <a href="<?= site_url('avaliador') ?>" class="btn">Avaliador</a>
        <a href="<?= site_url('resumos') ?>" class="btn">Resumos Aprovados</a>
        <a href="<?= site_url('useradmin') ?>" class="btn btn-success mt-3">Cadastrar Usuário</a>
        <a href="<?= site_url('usuarios') ?>" class="btn btn-primary btn-lg">Ver Usuários Cadastrados</a>
        
    </div>

    <footer>
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Univiçosa" class="logo">
        <p>Univiçosa<br> contato@univicosa.com.br<br> (31) 3899-8000<br> Viçosa - MG</p>
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

</body>
</html>
