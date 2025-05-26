<?php 
    require '../Model/Usuario.php';
    require '../Dao/ProfessorDao.php';
    require '../Dao/ConnectionFactory.php';   
    require '../Model/Professor.php';
    
   $professor = new Professor();
   $professorDao = new ProfessorDao; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST['cprofessor'])){
            $professor->setNome($_POST['userNameProfessor']);
            $professor->setrgmProfessor($_POST['userRGMProfessor']);
            $professor->setEmail($_POST['userEmailProfessor']);
            $professor->setSenha($_POST['userPasswordProfessor']);
            $professorDao->insert($professor);//aqui ele chamou a função inserir(Criar) do AlunoDao mas poderia ser outra(delete,update,read);
            header("location:../View/TelaLogin1.php");//Muda a localização para outra página//
        

   }
    }
   
?>