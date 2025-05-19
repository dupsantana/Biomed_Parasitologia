<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleedu_1.1.css">

    <style>
        /* Estilos Gerais */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        main {
            flex: 1;
        }

        /* Header */
        header {
            background-color: #272343 !important;
            padding: 1rem 0;
        }

        /* Cards */
        .card {
            margin: 1.5rem auto;
            max-width: 400px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Container dos Cards */
        #container_cards {
            padding: 2rem 0;
        }

        /* Footer */
        #footer_aluno {
            background-color: #272343;
            color: white;
            margin-top: auto;
            padding: 1.5rem;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            header .row {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            header .col-1, header .col-10, header .col-1 {
                width: 100%;
                max-width: 100%;
                flex: 0 0 100%;
            }

            #sair_aluno {
                width: 100%;
                margin-top: 1rem;
            }

            .card {
                margin: 1rem auto;
            }
        }

        @media (max-width: 576px) {
            #container_cards {
                padding: 1rem 0;
            }

            .card {
                width: 95% !important;
            }
        }
    </style>
   
    
</head>




<header class="m-0 w-100 shadow-lg" style="background-color: #272343;">
    <div class="container-fluid">
    <div class="row p-4">
        <div class="col-1 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
        <div class="col-10"></div>
        <div class="col-1">
            <button id="sair_aluno"class="fw-bold btn btn btn-secondary" onclick="window.location.href='indexedu_home.php'"> SAIR <i class="fa-solid fa-right-from-bracket"></i></button> 
        </div>
    </div>
    </div>
    <div>
    <h6 class="ms-3 pb-2"  style="color: white">Aluno: Eduardo Pelloso Santana / RGM:123456789</h6>

    </div>
    


    
</header>

    <div class="container" id="container_cards">
        <div class="row">
            <div class="col-6">
            <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="img/CARD_2_ALUNO.png"                  
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Cadastro de pacientes</h5>
                  <p class="card-text text-center">
                    Aqui você vai cadastrar seus pacientes e os exames correspondentes em seu prontuário.
                  </p>
                 <button class="btn btn-primary fw-bold p-0 text-center"> <a href="cadastroPacientes.php" class="text-light text-decoration-none">CADASTRAR</a> </button>
                </div>
              </div>
            </div>
        <div class="col-6">
            
        <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="img/CARD_1_ALUNO.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Consulta </h5>
                  <p class="card-text text-center">
                  Aqui você pode cadastrar seus pacientes e os exames correspondentes em seu prontuário.
                  </p>
                  <button class="btn btn-primary fw-bold p-0 text-center"> <a href="Consulta.php" class="text-light text-decoration-none">CONSULTAR</a> </button>
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