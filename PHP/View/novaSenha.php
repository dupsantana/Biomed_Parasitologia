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
  <?php 
        include'../Model/trechosCod.php';
        cabecalho();        
    ?>
  <!-- CONTEÚDO CENTRAL -->
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 col-lg-3 p-4 rounded" style="background-color: #272343; color: #e1dfe7;">
            <h2 class="text-center mb-4 display-8 text-white" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Recuperar Senha</h2>
            <form action="TelaLogin1.php" method="post">
              <div class="mb-3">
                  <p class="text-center">Digite a sua nova senha</p>
                <input type="password" class="form-control" name="newSenha">
              </div>
              <div class="text-center ">
              <button type="submit" class="btn btn-info ">Confirmar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  <!--FOOTER-->
      <?php            
            footer();
        ?>

</body>
</html>