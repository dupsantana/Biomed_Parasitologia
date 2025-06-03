<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar exame</title>
</head>
<body>
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
    include '../Model/trechosCod.php';
    cabecalho();
  ?>

  <!-- CONTEÚDO CENTRAL -->
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 ">
            <h2 class="mb-4 text-center">Pesquisar</h2>
            <p>Digite o nome do paciente que deseja atribuir um exame</p>
            <div class="mb-3"> 
                <input type="text" name="busca" class="form-control">
            </div>
            <div class="mb-3 text-center">
                 <input type="submit" class="btn btn-info" name="enviar" value="Buscar">
            </div>
           
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