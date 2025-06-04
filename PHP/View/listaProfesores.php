<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
</head>
<body>
    <?php
    include '../Controller/ProfessorController.php';    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Professores</title>
</head>
<body>
     <h1>Professores Cadastrados</h1>    
    <table class="table">
        <thead>
            <thead><tr><th>Rgm</th><th>Nome</th><th>Email</th></tr></thead>
        </thead>
        <tbody>
    <?php 
        lerProfessor();
    ?>
        </tbody>
    </table>
   
    
</body>
</html>

</body>
</html>