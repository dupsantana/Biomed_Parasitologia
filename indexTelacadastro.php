<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleedu_1.1.css">
</head>
<body>

<style>

    html,body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    body{
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

    <!--cabeçalho da página-->
    <div class="container-fluid m-0" style="background-color: #272343;">

    <header class="w-100" style="background-color: #272343;">
  <div class="container">
    <div class="row p-4">
        <div class="col-1 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
        
  </header>
    </div>
    
    <main>    
    <!--Container principal da página-->
    <div class="container-fluid p-3" style="background-color:#e1dfe7">      
    
        <!--primeira linha onde se encontra a parte principal da página-->
        <div class="row justify-content-center">

            <!--Coluna da esquerda feita apenas para centralizar a coluna principal -->           
            <div class="col-lg-4 d-none d-lg-block"></div>

            <!--Coluna principal localizada na parte central-->
            <div class="col-12 col-sm-10 col-md-8 col-lg-4 p-4 rounded" style="background-color: #272343; color: #e1dfe7;" >
                
                    <h2 class="text-center mb-4 display-5" style="color: white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Cadastrar</h2>
                <form action="TelaLogin1.php" method="post">
                <!--Campos de input-->
                <div class="row mt-3">               
                    <label for="userName" class="form-label">Nome</label>
                    <input type="text" name="userName" class="form-control">              
                </div>           
                <div class="row mt-3">
                    <label for="userCpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="userCpf">
                </div>
                <div class="row mt-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="userEmail" placeholder="user@exemple.com">
                </div> 
                <div class="row mt-3">
                    <label for="userPassword" class="form-label">Senha</label>
                    <input type="password" name="userPassword" class="form-control">
                </div>               
                <div class="row mt-3">
                    <label class="form-label" for="userPassword2">Digite sua senha novamente</label>
                    <input type="password" name="userPassword2" class="form-control">
                </div><br>
                <div class="row mt-3">
                
                    <button type="submit" class="btn btn-info">Cadastrar</button>
                </form>
                </div>
            </div>

            <!--coluna da direita-->
            <div class="col-lg-4 d-none d-lg-block"> </div>              
           
            <div class="row p-2">

            </div>
           
            
        </div>       
        </div>
        </main>

        <footer class="text-center p-3 mt-auto">
        <p><strong>Cleonard Solutions © 2025</strong></p>
        <p>Developers: bigode, pelanza e Clauds</p>
    </footer>
       
    
</body>
</html>