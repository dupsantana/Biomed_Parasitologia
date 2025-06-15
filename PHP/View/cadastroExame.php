<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Laboratório</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #e1dfe7;
        }
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .form-container {
            width: 100%;
            max-width: 900px;
            background-color: #000000;
            color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            margin: 0 auto;
            border: 1px solid #272343;
        }
        footer {
            background-color: #272343;
            color: white;
            padding: 1rem;
            margin-top: auto;
        }
        header {
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .form-section {
            background-color: #272343;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .form-section h3 {
            color: white;
            border-bottom: 1px solid #e1dfe7;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>
<body>
    <?php 
        include'../Model/trechosCod.php';
        //include'../Controller/ExameController.php';
        include'../Controller/ExameControllerApi.php';
        cabecalho();
        
        ?>
    
    <main>    
        <div class="form-container">
            <h2 class="text-center mb-4 display-5" style="color: white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Cadastrar Exame</h2>
            <form action="../Controller/ExameControllerApi.php" method="post">
                
                <div class="form-section">
                    <h3>Laboratório de Parasitologia</h3>
                    <div class="row">
                        <!--<div class="col-md-6 mb-3">
                            <label for="registro" class="form-label">Nº de Registro</label>
                            <input type="text" name="registro" class="form-control" required>
                        </div>-->
                        <div class="col-md-6 mb-3">
                            <label for="nome_paciente" class="form-label">Nome do Paciente</label>
                           <select name="paciente" id="paciente" class="form-select">
                            <?php 
                                readPaciente();
                                
                            
                            ?>
                           </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="entrada" class="form-label">Entrada</label>
                            <input type="time" name="entrada" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="data_exame" class="form-label">Data e Hora da Realização do Exame</label>
                            <input type="date" class="form-control" name="data_exame" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="data_entrega" class="form-label">Data Prevista para a Entrega do Laudo</label>
                            <input type="date" class="form-control" name="data_entrega" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Parasitologia</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="tipo_amostra" class="form-label">Tipo de Amostra</label>
                            <input type="text" name="tipo_amostra" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tecnica" class="form-label">Técnica Utilizada</label>
                            <input type="text" name="tecnica" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="consistencia" class="form-label">Consistência</label>
                            <input type="text" name="consistencia" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="coloracao" class="form-label">Coloração</label>
                            <input type="text" name="coloracao" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="muco" class="form-label">Muco</label>
                            <input type="text" name="muco" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="sangue" class="form-label">Sangue</label>
                            <input type="text" name="sangue" class="form-control" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Responsáveis</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="responsavel_exame" class="form-label">Responsável pelo Exame</label>
                            <select name="aluno" id="aluno" class="form-select">
                                <?php 
                                    
                                    readAluno();
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="preceptor" class="form-label">Preceptor Responsável</label>
                            <select name="professor" id="professor" class="form-select">
                                <?php 
                                    readProfessor();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-info w-100" name="enviar">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!--FOOTER-->
      <?php 
            
            footer();
        ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
    $(document).ready(function() {
    });
    </script>
</body>
</html>