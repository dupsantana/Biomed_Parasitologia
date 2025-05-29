<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinicode - Prontuário eletrônico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styleedu_1.1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  

</head>

<body class="d-flex flex-column"> <!--min-vh-100-->

<header class="text-center m-0 w-100 shadow-lg" style="background-color: #272343;">
    <div class="container">
        <div class="row p-4 align-items-center">
            <div class="col-12 fw-bold text-center mt-3" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                <h1><strong>CLINICODE</strong></h1>
            </div>
        </div>

        <div class="row p-4 align-items-center">
            <div class="col-12">
                <div class="d-flex justify-content-between gap-2">
                    <button type="button" class="btn btn-secondary fw-bold flex-grow-1 d-flex align-items-center justify-content-center gap-3" onclick="window.location.href='TelaLogin1.php'">
                        Entrar <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                    
                    <button type="button" class="btn btn-secondary fw-bold flex-grow-1 d-flex align-items-center justify-content-center gap-3" onclick="window.location.href='Telacadastro_aluno.php'">
                        Cadastrar Aluno <i class="fa-solid fa-graduation-cap" style="color: #ffffff;"></i>
                    </button>
                    
                    <button type="button" class="btn btn-secondary fw-bold flex-grow-1 d-flex align-items-center justify-content-center gap-3" onclick="window.location.href='Telacadastro_professor.php'">
                        Cadastrar Professor <i class="fa-solid fa-clipboard"></i>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</header>
    

    <main>
        <div class="carousel-wrapper mb-5">
            <div class="container">
                <div id="container_carrosel" class="container">
                    <div id="carrosel" class="mt-5 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2500">
                                <img src="img/8.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="img/9.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="img/10.png" class="d-block w-100" alt="...">
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


        

    </main>

     <!--FOOTER-->
      <?php 
            include '../Model/trechosCod.php';
            footer();
        ?>

</body>
  


</html>