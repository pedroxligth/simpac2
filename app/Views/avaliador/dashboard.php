<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Avaliador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #007bff;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-footer {
            background-color: #f1f1f1;
        }
        .list-group-item {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .voltar-btn{
        position: relative;
            top: -180px; /* Ajuste conforme necessário */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Dashboard do Avaliador</h1>

        <!-- Exibir os trabalhos cadastrados -->
        <div class="trabalhos mt-3">
            <?php if (!empty($trabalhos)): ?>
                <ul class="list-group">
                    <?php foreach ($trabalhos as $trabalho): ?>
                        <li class="list-group-item">
                            <strong>Protocolo:</strong> <?= esc($trabalho['protocolo']) ?><br>
                            <strong>Resumo:</strong> <?= esc($trabalho['resumo']) ?><br>
                            <strong>Curso:</strong> <?= esc($trabalho['curso']) ?><br>
                            <strong>Modelo Avaliativo:</strong> <?= esc($trabalho['modelo_avaliativo']) ?><br>
                            <strong>Avaliador:</strong> <?= esc($trabalho['avaliadores']) ?><br>
                            <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#avaliacaoModal<?= esc($trabalho['id']) ?>">
                                Avaliar Pôster
                            </button>
                            <button class="btn btn-secondary mt-2" data-toggle="modal" data-target="#avaliacaoOralModal<?= esc($trabalho['id']) ?>">
                                Avaliar Oralmente
                            </button>
                        </li>

                        <!-- Modal de Avaliação do Pôster -->
                        <div class="modal fade" id="avaliacaoModal<?= esc($trabalho['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="avaliacaoModalLabel<?= esc($trabalho['id']) ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="avaliacaoModalLabel<?= esc($trabalho['id']) ?>">Avaliação do Trabalho <?= esc($trabalho['protocolo']) ?> (Pôster)</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="<?= site_url('avaliador/avaliar/' . esc($trabalho['id'])) ?>">
                                        <div class="modal-body">
                                            <h6>PONTOS A SEREM AVALIADOS (PÔSTER)</h6>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Critério</th>
                                                        <th>E</th>
                                                        <th>MB</th>
                                                        <th>B</th>
                                                        <th>R</th>
                                                        <th>I</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Clareza nas Informações</td>
                                                        <td><input type="radio" name="clareza_informacoes" value="10" required></td>
                                                        <td><input type="radio" name="clareza_informacoes" value="8"></td>
                                                        <td><input type="radio" name="clareza_informacoes" value="4"></td>
                                                        <td><input type="radio" name="clareza_informacoes" value="2"></td>
                                                        <td><input type="radio" name="clareza_informacoes" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Autores e seus descritores corretamente apresentados</td>
                                                        <td><input type="radio" name="autores_descritores" value="10" required></td>
                                                        <td><input type="radio" name="autores_descritores" value="8"></td>
                                                        <td><input type="radio" name="autores_descritores" value="4"></td>
                                                        <td><input type="radio" name="autores_descritores" value="2"></td>
                                                        <td><input type="radio" name="autores_descritores" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distribuição das informações textuais (Resumo, introdução, materiais e métodos, resultados e discussão, conclusão e Referências Bibliográficas apresentados de forma técnica - ABNT)</td>
                                                        <td><input type="radio" name="distribuicao_informacoes" value="10" required></td>
                                                        <td><input type="radio" name="distribuicao_informacoes" value="8"></td>
                                                        <td><input type="radio" name="distribuicao_informacoes" value="4"></td>
                                                        <td><input type="radio" name="distribuicao_informacoes" value="2"></td>
                                                        <td><input type="radio" name="distribuicao_informacoes" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tabelas, quadros e figuras apresentados de forma correta</td>
                                                        <td><input type="radio" name="tabelas_quadro_figuras" value="10" required></td>
                                                        <td><input type="radio" name="tabelas_quadro_figuras" value="8"></td>
                                                        <td><input type="radio" name="tabelas_quadro_figuras" value="4"></td>
                                                        <td><input type="radio" name="tabelas_quadro_figuras" value="2"></td>
                                                        <td><input type="radio" name="tabelas_quadro_figuras" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pensamento científico – (organização e planejamento utilizando métodos científicos)</td>
                                                        <td><input type="radio" name="pensamento_cientifico" value="10" required></td>
                                                        <td><input type="radio" name="pensamento_cientifico" value="8"></td>
                                                        <td><input type="radio" name="pensamento_cientifico" value="4"></td>
                                                        <td><input type="radio" name="pensamento_cientifico" value="2"></td>
                                                        <td><input type="radio" name="pensamento_cientifico" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Habilidade – (Organização lógica da apresentação)</td>
                                                        <td><input type="radio" name="habilidade_organizacao" value="10" required></td>
                                                        <td><input type="radio" name="habilidade_organizacao" value="8"></td>
                                                        <td><input type="radio" name="habilidade_organizacao" value="4"></td>
                                                        <td><input type="radio" name="habilidade_organizacao" value="2"></td>
                                                        <td><input type="radio" name="habilidade_organizacao" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Clareza – (transmitir com transparência e nitidez o conteúdo do seu trabalho)</td>
                                                        <td><input type="radio" name="clareza" value="10" required></td>
                                                        <td><input type="radio" name="clareza" value="8"></td>
                                                        <td><input type="radio" name="clareza" value="4"></td>
                                                        <td><input type="radio" name="clareza" value="2"></td>
                                                        <td><input type="radio" name="clareza" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Minuciosidade – conhecimento exposto de forma didática</td>
                                                        <td><input type="radio" name="minuciosidade" value="10" required></td>
                                                        <td><input type="radio" name="minuciosidade" value="8"></td>
                                                        <td><input type="radio" name="minuciosidade" value="4"></td>
                                                        <td><input type="radio" name="minuciosidade" value="2"></td>
                                                        <td><input type="radio" name="minuciosidade" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>A conclusão e/ou considerações finais não extrapolou o contexto e foi apresentada de forma clara</td>
                                                        <td><input type="radio" name="conclusao" value="10" required></td>
                                                        <td><input type="radio" name="conclusao" value="8"></td>
                                                        <td><input type="radio" name="conclusao" value="4"></td>
                                                        <td><input type="radio" name="conclusao" value="2"></td>
                                                        <td><input type="radio" name="conclusao" value="0"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal de Avaliação Oral -->
                        <div class="modal fade" id="avaliacaoOralModal<?= esc($trabalho['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="avaliacaoOralModalLabel<?= esc($trabalho['id']) ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="avaliacaoOralModalLabel<?= esc($trabalho['id']) ?>">Avaliação do Trabalho <?= esc($trabalho['protocolo']) ?> (Oral)</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="<?= site_url('avaliador/avaliar_oral/' . esc($trabalho['id'])) ?>">
                                        <div class="modal-body">
                                            <h6>PONTOS A SEREM AVALIADOS (ORAL)</h6>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Critério</th>
                                                        <th>E</th>
                                                        <th>MB</th>
                                                        <th>B</th>
                                                        <th>R</th>
                                                        <th>I</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Fez a introdução do conteúdo do trabalho de forma clara e objetiva</td>
                                                        <td><input type="radio" name="introducao_trabalho" value="10" required></td>
                                                        <td><input type="radio" name="introducao_trabalho" value="8"></td>
                                                        <td><input type="radio" name="introducao_trabalho" value="4"></td>
                                                        <td><input type="radio" name="introducao_trabalho" value="2"></td>
                                                        <td><input type="radio" name="introducao_trabalho" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Habilidade – (Organização lógica da apresentação)</td>
                                                        <td><input type="radio" name="habilidade_apresentacao" value="10" required></td>
                                                        <td><input type="radio" name="habilidade_apresentacao" value="8"></td>
                                                        <td><input type="radio" name="habilidade_apresentacao" value="4"></td>
                                                        <td><input type="radio" name="habilidade_apresentacao" value="2"></td>
                                                        <td><input type="radio" name="habilidade_apresentacao" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Evita repetições e digressões desnecessárias</td>
                                                        <td><input type="radio" name="repeticoes_digressoes" value="10" required></td>
                                                        <td><input type="radio" name="repeticoes_digressoes" value="8"></td>
                                                        <td><input type="radio" name="repeticoes_digressoes" value="4"></td>
                                                        <td><input type="radio" name="repeticoes_digressoes" value="2"></td>
                                                        <td><input type="radio" name="repeticoes_digressoes" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Clareza e minuciosidade – (transmitir com transparência e nitidez o conteúdo do seu trabalho)</td>
                                                        <td><input type="radio" name="clareza_minuciosidade_oral" value="10" required></td>
                                                        <td><input type="radio" name="clareza_minuciosidade_oral" value="8"></td>
                                                        <td><input type="radio" name="clareza_minuciosidade_oral" value="4"></td>
                                                        <td><input type="radio" name="clareza_minuciosidade_oral" value="2"></td>
                                                        <td><input type="radio" name="clareza_minuciosidade_oral" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>A conclusão e/ou considerações finais não extrapolou o contexto e foi apresentada de forma objetiva</td>
                                                        <td><input type="radio" name="conclusao_oral" value="10" required></td>
                                                        <td><input type="radio" name="conclusao_oral" value="8"></td>
                                                        <td><input type="radio" name="conclusao_oral" value="4"></td>
                                                        <td><input type="radio" name="conclusao_oral" value="2"></td>
                                                        <td><input type="radio" name="conclusao_oral" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nas respostas revela independência do material documentado e apresenta raciocínio lógico</td>
                                                        <td><input type="radio" name="independencia_raciocinio" value="10" required></td>
                                                        <td><input type="radio" name="independencia_raciocinio" value="8"></td>
                                                        <td><input type="radio" name="independencia_raciocinio" value="4"></td>
                                                        <td><input type="radio" name="independencia_raciocinio" value="2"></td>
                                                        <td><input type="radio" name="independencia_raciocinio" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempo de apresentação satisfatório</td>
                                                        <td><input type="radio" name="tempo_apresentacao" value="10" required></td>
                                                        <td><input type="radio" name="tempo_apresentacao" value="8"></td>
                                                        <td><input type="radio" name="tempo_apresentacao" value="4"></td>
                                                        <td><input type="radio" name="tempo_apresentacao" value="2"></td>
                                                        <td><input type="radio" name="tempo_apresentacao" value="0"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Enviar Avaliação Oral</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="alert alert-warning" role="alert">
                    Nenhum trabalho cadastrado.
                </div>
            <?php endif; ?>
        </div>
    </div>
    <button class:onclick="goBack()" class="voltar-btn">Voltar</button>

    <script>
    function goBack() {
        window.history.back();
}
</script>
</body>

</script>
</html>
