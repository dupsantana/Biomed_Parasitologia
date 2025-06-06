<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1; /* serve para ocupare todo espaço entre header e footer*/ 
      background-color: #e1dfe7;
      display: flex;
      align-items: center; /*alinha os itens na vertical (eixo y)*/
      justify-content: center;/*alinhaos itens na horizontal (eixo x)*/ 
    }
  </style>
</head>
<body>
 

   
  <!-- HEADER -->
  <!--<header class="text-center m-0 w-100 shadow-lg" style="background-color: #272343;">
    <div class="container">
        <div class="row p-4 align-items-center">
            <div class="col-12 fw-bold text-center mt-3" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                <h2><strong>CLINICODE</strong></h2>
            </div>
        </div>
        </div>
        </header>-->

        <?php 
        include'../Model/trechosCod.php';
        cabecalho();
        
        ?>
  <!-- CONTEÚDO CENTRAL -->
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 p-3 rounded" style="background-color: #272343; color: #e1dfe7;">
          <h2 class="text-center mb-4 display-5 text-white" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h2>
          <form action="" method="post">
            <div class="mb-3">

              <label for="userRGMProfessor" class="form-label">RGM</label>
              <input type="text" class="form-control" name="userRGMProfessor">
            </div>
            <div class="mb-3">
              <label for="userPassword" class="form-label">Senha</label>
              <input type="password" class="form-control" name="userPassword">           

            </div>
            <div class="text-center mb-3">
              <a href="esqueciSenha.php">Esqueceu a senha?</a>
            </div>
            <div class="text-center ">            
            <button type="submit" class="btn btn-info " onclick="window.location.href='aluno.php'" >Entrar</button>            
            </div>            
          </form> 
          
        </div>
      </div>
    </div>
  </main>
 

  <!-- FOOTER -->
  
   <?php 
            
            footer();
        ?>

</body>
</html>
