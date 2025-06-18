<?php     
    require '../Model/Exame.php';
    require '../Dao/ConnectionFactory.php';
    require '../Dao/ExameDao.php';
    require '../Model/Usuario.php';
    require '../Dao/AlunoDao.php';
    require '../Model/Aluno.php';
    require '../Dao/ProfessorDao.php';
    require '../Model/Professor.php';
    require '../Model/Pacientes.php';
    require '../Dao/PacienteDao.php';
    require '../Dao/ExameDaoApi.php';
    mb_internal_encoding("UTF-8");

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $examein = new Exame();
        $exameDaoin = new ExameDao();
        $exameDaoApi = new ExameDaoApi();
        if(isset($_POST['enviar'])){
            $examein->setPaciente($_POST['paciente']);
            $examein->setEntrada($_POST['entrada']);
            $examein->setData_exame($_POST['data_exame']);            
            $examein->setData_entrega($_POST['data_entrega']);            
            $examein->setTipo_amostra($_POST['tipo_amostra']);            
            $examein->setTecnica($_POST['tecnica']);
            $examein->setConsistencia($_POST['consistencia']);
            $examein->setColoracao($_POST['coloracao']);
            $examein->setMuco($_POST['muco']);
            $examein->setSangue($_POST['sangue']);
            $examein->setResponsavel_exame($_POST['aluno']);
            $examein->setPreceptor($_POST['professor']);          
            $exame_id = $exameDaoin->insert($examein);           
          
           
             
            
            if ($exame_id) {
            header("location:../View/Laudo.php?id=$exame_id");
            exit;
        } else {
            echo "Erro ao cadastrar exame.";
        }
            
        }
    }

    if (isset($_GET['id'])) {      
    $idLaudo=($_GET['id']);

   $exameDaoBuscaId = new ExameDao();
    $exameEncontrado = $exameDaoBuscaId ->buscarPorId($idLaudo);     
    
    //pegando o id aluno//
    $idAluno = $exameEncontrado->getResponsavel_exame();
    $alunoEncontrado = $exameDaoBuscaId->readAlunoId($idAluno); 
    $alunoNome = mb_strtoupper($alunoEncontrado);//DEIXA EM MAIUSCULO
   
    //pegando o id professor//
    $idProfessor = $exameEncontrado->getPreceptor();
    $professoreEncontrado = $exameDaoBuscaId->readProfessorId($idProfessor);
    $professorNome = mb_strtoupper($professoreEncontrado);//DEIXA EM MAIUSCULO 
        
     } 
     if(isset($_GET['deletar']) && isset($_GET['id'])){
        $idExcluir = ($_GET['id']);
        delete($idExcluir);
     } 

     
    function delete($id){
    
        
    }

    function readPaciente(){
        $paciente1 = new Pacientes();
        $exameDao = new ExameDao();
        $lista = $exameDao->readPaciente($paciente1);     
   
        foreach($lista as $pacienteEncontrado){
            echo"<option value = '{$pacienteEncontrado->getId()}' >{$pacienteEncontrado->getNome()}</option>";
        }
      
    }

   function readAluno(){
        $aluno = new Aluno();
        $alunoDao = new AlunoDao();
        $lista = $alunoDao->read();
        
        foreach($lista as $aluno){
            echo "<option value='{$aluno->getId()}'>{$aluno->getNome()}</option>";
        }

   }
   function readProfessor(){
        $professor = new Professor();
        $professorDao = new ProfessorDao();
        $lista = $professorDao ->read($professor);

        foreach($lista as $professoreEncontrado){
            echo"<option value='{$professoreEncontrado->getId()}'>{$professoreEncontrado->getNome()}</option>";
        }
   }    

    
        
    



?>