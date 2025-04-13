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
  <header class="w-100" style="background-color: #272343;">
  <div class="container">
    <div class="row p-4">
        <div class="col-1 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
        
  </header>

  <!-- CONTEÚDO CENTRAL -->
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 p-5 rounded" style="background-color: #272343; color: #e1dfe7;">
          <h2 class="text-center mb-4 display-5 text-white" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h2>
          <form action="" method="post">
            <div class="mb-3">
              <label for="rgm" class="form-label">RGM</label>
              <input type="text" class="form-control" name="rgm">
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha">
            </div>
            <div class="text-center mb-3">
              <a href="ESQUECI A SENHA/esqueciSenha.php">Esqueceu a senha?</a>
            </div>
            <div class="text-center ">
            <button type="submit" class="btn btn-info ">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="text-center p-3 text-light" style="background-color: #272343;">
    <div >
      <p><strong>Cleonard Solutions © 2025</strong></p>
      <p>Developers: bigode, pelanza e Clauds</p>
    </div>
  </footer>

</body>
</html>
