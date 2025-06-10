<?php 
    require '../Model/Pacientes.php';
    require '../Model/Exame.php';
    require '../Dao/ConnectionFactory.php';
    require '../Dao/ExameDao.php';
    require '../Model/Usuario.php';
    require '../Dao/AlunoDao.php';
    require '../Model/Aluno.php';
    require '../Dao/ProfessorDao.php';
    require '../Model/Professor.php';


    function PesquisarPaciente(){
        $paciente = new Pacientes();
        $exameDao = new ExameDao;
        $paciente ->setNome($_GET['busca']);
        $resultadoBusca = $exameDao ->readPacienteForExame($paciente); 

       if(empty($resultadoBusca)){
            echo"Nenhum paciente encontrado";
        }else{

       foreach($resultadoBusca as $pacienteR){       
            echo "
                <tr>
                  <td>{$pacienteR->getId()}</td>
                  <td>{$pacienteR->getNome()}</td>
                  <td>{$pacienteR->getPacienteMail()}</td>                  
                  <td><a href='cadastroExame.php'<?php require '../Controller/ExameController.php';
                   CadastrocomNomeIdEncontrado(Pacientes $paciente)?>>Cadastrar</a></td>                  
               </tr>";//aqui de acordo com o que o usuario clicar eu ja carregaria a tela de cadastro de exame com o nome e ID paciente ja preenchidos 
                   
        }
    }        
        
    }
    //função onde se manipula os dados recebidos de cadastro de exame já com nome e id(Paciente) preenchidos
    function CadastrocomNomeIdEncontrado(Pacientes $paciente){
            $exame1 = new exame();
            $exameDao1 = new ExameDao();
            $exame1 ->setRegistro($paciente->getId());
            $exame1->setNome_paciente($paciente->getNome());
                
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
        $lista = $professorDao ->read();

        foreach($lista as $professoreEncontrado){
            echo"<option value='{$professoreEncontrado->getId()}'>{$professoreEncontrado->getNome()}</option>";
        }

   }

    //chama o update//
    function chamaUPDATE(){

    }

    //chama DELETE
    function chamaDelete(){

    }    
       
        
    



?>