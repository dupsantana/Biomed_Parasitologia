
  <?php
    include '../Controller/ProfessorController.php';    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" />
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