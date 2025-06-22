<?php
    require '../Controller/ExameControllerApi.php';   
    include'../Model/trechosCod.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laudo de Parasitologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body body class="bg-light" >
    <?php cabecalho();?>
       
       

<div class="container mt-5" id="conteudo">
    <h2> Exame Parasitológico</h2>

    <!-- Exemplo de dados do exame -->
    <div class="card mb-4">
        <div class="card-header">Dados do Exame</div>
        <div class="card-body">
            <p><strong>Paciente ID:</strong>
            <?php echo $exameEncontrado->getPaciente(); ?></p>
            
            <p><strong>Data do Exame:</strong><?php  $dataBrasil = date("d/m/Y", strtotime($exameEncontrado->getData_exame())); echo $dataBrasil ;?></p>
            <p><strong>Entrada:</strong><?php echo $exameEncontrado->getEntrada(); ?></p>            
            <p><strong>Tipo de Amostra:</strong><?php echo  mb_strtoupper($exameEncontrado->getTipo_amostra());  ?></p>
            <p><strong>Técnica:</strong><?php echo  mb_strtoupper($exameEncontrado->getTecnica()); ?></p>
            <p><strong>Consistência:</strong><?php echo mb_strtoupper($exameEncontrado->getConsistencia()); ?></p>
            <p><strong>Sangue:</strong><?php echo mb_strtoupper($exameEncontrado->getSangue()); ?></p>
            <p><strong>Coloração:</strong><?php echo mb_strtoupper( $exameEncontrado->getColoracao()); ?></p>
            <p><strong>Muco:</strong><?php echo mb_strtoupper($exameEncontrado->getMuco());?></p>
            <p><strong>Aluno Reponsavel: </strong><?php echo $alunoNome ?></p>
            <p><strong>Professor responsavel:</strong><?php echo $professorNome;?></p>
        </div>
    </div>
    </div>
    <div class="text-center">
    <form method="get">  
        <!--input não visivel que passa o id como resposta-->
        <input type="hidden" name='id' value="<?php echo $exameEncontrado->getId(); ?>">
        <!--botão de deletar-->
        <input type="submit" name="deletar" value = "Excluir exame" class="btn btn-danger">
        <!-- Link que tem um name,Oque Ele faz? ele envia o id do exame pela url  -->
        <a name="editar" href='../View/cadastroExameAPI.php?editar=<?php echo $exameEncontrado->getId(); ?>'class="btn btn-primary">Editar Exame</a>
    </form><br>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script> 
    <button onclick="gerarPDF()" class="btn btn-success">PDF</button>      
        <script>
        function gerarPDF() {
        var element = document.getElementById('conteudo');
        html2pdf().from(element).save();
        }
</script>
    </div>

 
       
        

    <?php footer();?>
            
   

</body>
</html>
