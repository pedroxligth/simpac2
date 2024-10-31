<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Trabalho</title>
</head>
<body>
    <h1>Criar Trabalho</h1>

    <!-- Exibe mensagens de sucesso ou erro, se existirem -->
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php elseif (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <!-- Exibe erros de validação -->
    <?php if (isset($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li style="color: red;"><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Formulário para criar trabalho -->
    <form action="<?= base_url('criar-trabalho') ?>" method="post">
        <?= csrf_field() ?>

        <label for="protocolo">Protocolo:</label>
        <input type="text" name="protocolo" id="protocolo" value="<?= old('protocolo') ?>" required>
        <br><br>

        <label for="resumo">Resumo:</label>
        <textarea name="resumo" id="resumo" required><?= old('resumo') ?></textarea>
        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" value="<?= old('curso') ?>" required>
        <br><br>

        <label for="modelo_avaliativo">Modelo Avaliativo:</label>
        <input type="text" name="modelo_avaliativo" id="modelo_avaliativo" value="<?= old('modelo_avaliativo') ?>" required>
        <br><br>

        <label for="avaliadores">Avaliadores:</label>
        <input type="text" name="avaliadores" id="avaliadores" value="<?= old('avaliadores') ?>" required>
        <br><br>

        <button type="submit">Criar Trabalho</button>
    </form>
</body>
</html>
