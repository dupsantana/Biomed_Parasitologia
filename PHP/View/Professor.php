
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/styleProfessor.css">
    
</head>

<body>
<main>

<header class="m-0 w-100 shadow-lg" style="background-color: #272343;">
    <div class="container-fluid">
    <div class="row p-4">
        <div class="col-1 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
        
        <div class="col-10"></div>
        <div class="col-1">
            <button id="sair_aluno"class="fw-bold btn btn btn-secondary" onclick="window.location.href='index_home.php'">SAIR <i class="fa-solid fa-right-from-bracket"></i></button> 
        </div>
    </div>
    </div>
    <div>
    <h6 class="ms-3 pb-2"  style="color: white">  

    </h6>  

    </div>

</header>

<nav class="navbar navbar-expand-lg bg-body-tertiary p-0" >
  <div class="container-fluid" style="background-color:rgb(110, 103, 155);"> 
 
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="../View/listaProfessores.php">Ver Professores cadastrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Ver alunos cadastrados</a>
        </li>            
      </ul>
    </div>
  </div>
</nav>

    <div class="container" id="container_cards">
        <div class="row">
            <div class="col-4">
            <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="img/CARD_1_PROFESSOR.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Cadastro de pacientes</h5>
                  <p class="card-text text-center">
                    Aqui você vai cadastrar seus pacientes.
                  </p>
                  <button class="btn btn-primary fw-bold p-0 text-center"> <a href="cadastroPacientes.php" class="text-light text-decoration-none">CADASTRAR</a></button>
                  
                </div>
              </div>
            </div>
        <div class="col-4">
            
        <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="img/CARD_2_PROFESSOR.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Consulta </h5>
                  <p class="card-text text-center">
                  Aqui você pode consultar pacientes.
                  </p>
                  <button class="btn btn-primary fw-bold p-0 text-center"> <a href="Consulta.php" class="text-light text-decoration-none">CONSULTAR</a></button>
                </div>
              </div>
              

              
              
            </div>
            <div class="col-4">
            
        <div class="card h-100 mx-auto" style="width: 18rem">
                <img
                  src="img/Exame.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body text-center d-grid">
                  <h5 class="card-title text-center">Cadastro Exames</h5>
                  <p class="card-text text-center">
                  Aqui você pode cadastrar exame.
                  </p>
                  <button class="btn btn-primary fw-bold p-0 text-center"> <a href="cadastroExameAPI.php" class="text-light text-decoration-none">CADASTRAR</a></button>
                </div>
              </div>
              

              
              
            </div>
          

        </div>

        </div>

    </div>  
   

</main>


 <!--FOOTER-->
      <?php 
            include '../Model/trechosCod.php';
            footer();
        ?>




</body>