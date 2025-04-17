<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Clinicode - Prontuário eletrônico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleedu_1.1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="d-flex flex-column"> <!--min-vh-100-->

<header class=" text-center m-0 w-100 shadow-lg" style="background-color: #272343;">
    <div class="container">
    <div class="row p-4">
        <div class="col-1 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
        <div class="col-9"></div>
        <div class="col-1">
        <button id="btn_cadastro_header" type="button" class="btn btn-secondary fw-bold d-flex align-items-center justify-content-center gap-3" onclick="window.location.href='main_aluno.php'">Entrar<i class="fa-solid fa-right-to-bracket"></i>   </button>
  
</button>
</div>
        <div class="col-1">
        
        <button id="btn_cadastro_header" type="button" class="btn btn-secondary fw-bold d-flex align-items-center justify-content-center gap-3" onclick="window.location.href='indexTelacadastro.php'">
  Cadastrar<i class="fa-solid fa-clipboard"></i>
</button>

        </div>
    </div>

    </div>
</header>

    

    <main class="flex-grow-1">
        <div class="carousel-wrapper mb-5">
            <div class="container">
                <div id="container_carrosel" class="container">
                    <div id="carrosel" class="mt-5 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2500">
                                <img src="imagens/8.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="imagens/9.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="imagens/10.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrosel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrosel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container quemsomos align-items-center text-center">
            <h3>PRONTUÁRIO ELETRÔNICO</h3>
            <p class="text-center">
                A <strong>Clinicode</strong> é uma plataforma digital desenvolvida para integrar alunos e tutores de
                BIOMEDICINA em um ambiente colaborativo e seguro. Nosso objetivo é simplificar o registro e análise de
                exames realizados nos laboratórios para o aprendizado e a pesquisa acadêmica.

                Dentre suas funcionalidades estão:<br> Cadastro seguro de pacientes com dados anonimizados para preservar a privacidade, alunos inserem dados
                enquanto tutores validam resultados e fornecem feedback. <br>Integração multidisciplinar vinculando
                Microbiologia, Bioquimica, Hematologia, Imunologia e Parasitologia.<br>
            </p>
            <p class="text-center mt-4 fst-italic">
                Tecnologia a serviço da ciência. Educação que transforma.
            </p>
        </div>


        <footer class="text-center p-3 mt-auto">
            <p><strong>Cleonard Solutions © 2025</strong></p>
            <p>Developers: bigode, pelanza e Clauds</p>
        </footer>

    </main>



</body>

</html>