<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleedu_1.1.css">
    
</head>

<body>

<main>

<header>

<?php include "cabeçalho_tutor.php"; ?>

</header>

    <div class="container" id="container_cards">
        <div class="row">
            <div class="col-6">
            <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="imagens/CARD_1_PROFESSOR.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Cadastro de pacientes</h5>
                  <p class="card-text text-center">
                    Aqui você vai cadastrar seus pacientes e os exames correspondentes em seu prontuário.
                  </p>
                  <a href="cftv.html" class="btn btn-primary fw-bold">CADASTRAR</a>
                </div>
              </div>
            </div>
        <div class="col-6">
            
        <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="imagens/CARD_2_PROFESSOR.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Consulta </h5>
                  <p class="card-text text-center">
                  Aqui você pode consultar seus alunos, pacientes e os prontuários feitos por eles.
                  </p>
                  <a href="cftv.html" class="btn btn-primary fw-bold">CONSULTA</a>
                </div>
              </div>
              
            </div>

        </div>

        </div>

    </div>


    






    <footer id="footer_aluno" class="text-center p-3 mt-auto">
            <p><strong>Cleonard Solutions © 2025</strong></p>
            <p>Developers: bigode, pelanza e Clauds</p>
        </footer>

</main>






</body>