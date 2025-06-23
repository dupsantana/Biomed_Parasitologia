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
      flex: 1; /* serve para ocupar todo espaço entre header e footer*/ 
      background-color: #e1dfe7;
      display: flex;
      align-items: center; /* alinha os itens na vertical (eixo y) */
      justify-content: center; /* alinha os itens na horizontal (eixo x) */ 
    }
  </style>
</head>
<body>

  <?php 
    include '../Model/trechosCod.php';
    cabecalho();
  ?>

  <!-- CONTEÚDO CENTRAL -->
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 p-3 rounded" style="background-color: #272343; color: #e1dfe7;">
          <h2 class="text-center mb-4 display-5 text-white" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h2>
          <?php
session_start();
if (isset($_SESSION['login_error'])) {
    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']); // limpa a mensagem após exibir
}
?>
          <form action="../Controller/LoginController.php" method="post">
            <div class="mb-3">
              <label for="userRGMProfessor" class="form-label">RGM</label>
              <input type="text" id="userRGMProfessor" class="form-control" name="userRGMProfessor" />
            </div>
            <div class="mb-3">
              <label for="userPassword" class="form-label">Senha</label>
              <input type="password" id="userPassword" class="form-control" name="userPassword" />
            </div>
            <div class="text-center mb-3">
              <a href="esqueciSenha.php">Esqueceu a senha?</a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-info">Entrar</button>
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
