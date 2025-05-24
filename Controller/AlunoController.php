<?php 
    require '../Model/Php/Usuario.php';
    require '../Dao/AlunoDao.php';
    require '../Dao/ConnectionFactory.php';   
    require '../Model/Php/Aluno.php';
    
   $aluno = new Aluno();
   $alunoDao = new AlunoDao; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['cadastrar'])){
            $aluno->setNome($_POST['userName']);
            $aluno->setrgm($_POST['userRGM']);
            $aluno->setEmail($_POST['userEmail']);
            $aluno->setSenha($_POST['userPassword']);
            $alunoDao->insert($aluno);//aqui ele chamou a função inserir(Criar) do AlunoDao mas poderia ser outra(delete,update,read);
            header("location:../View/TelaLogin1.php");//Muda a localização para outra página//
        

   }
    }
   
?>