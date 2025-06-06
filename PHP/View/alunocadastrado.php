<?php
    include '../Controller/AlunoController.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">">
</head>

<body>
    

    <header>
        
    </header>

    <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <table class="table">
                    
                    <thead><tr><th>RGM</th><th>Nome</th><th>Email</th></tr></thead>
                    <tbody>
                        <<?php
                               lerAluno();
                        ?>

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    
</body>
</html>