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
        $exameDaoExcuir = new ExameDao();
        $exameDelete = $exameDaoExcuir->delete($idExcluir);
        
        if($exameDelete == 1){
            echo" <script>alert('exame excluido com sucesso'); 
            window.location.href = '../View/aluno.php';</script>";
            
        }else{
             echo"<script>alert('erro ao deletar exame');</script>";
        }
     } 

     if(isset($_POST['editar']) && isset($_POST['id'])){
        
        
        $editar = new Exame();
        $editarDao = new ExameDao();
        $editar->setId($_POST['id']);
        $editar->setPaciente($_POST['paciente']);
        $editar->setEntrada($_POST['entrada']);
        $editar->setData_exame($_POST['data_exame']);            
        $editar->setData_entrega($_POST['data_entrega']);            
        $editar->setTipo_amostra($_POST['tipo_amostra']);            
        $editar->setTecnica($_POST['tecnica']);
        $editar->setConsistencia($_POST['consistencia']);
        $editar->setColoracao($_POST['coloracao']);
        $editar->setMuco($_POST['muco']);
        $editar->setSangue($_POST['sangue']);
        $editar->setResponsavel_exame($_POST['aluno']);
        $editar->setPreceptor($_POST['professor']);    
        
        $resultadoEdicao = $editarDao->update($editar);      
       

        if($resultadoEdicao==1){
            echo"<script>alert('exame editado com sucesso'); 
            window.location.href = '../View/Laudo.php?id={$editar->getId()}';</script>";

        }else{
            echo"Erro ao atualizar dados";
        }
        
       

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