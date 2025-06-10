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


    /*function PesquisarPaciente(){
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
            $exame1 = new Exame();
            $exameDao1 = new ExameDao();
            $exame1 ->setRegistro($paciente->getId());
            $exame1->setNome_paciente($paciente->getNome());                
    }*/

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $examein = new Exame();
        $exameDaoin = new ExameDao();
        if(isset($_POST['enviar'])){
            $examein->setRegistro($_POST['paciente']);
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
            $exameDaoin->insert($examein);
            header("location:../View/Laudo.php");
        }
    }
    
    function readPaciente(){
           $paciente1 = new Pacientes();
            $exameDao = new ExameDao();
            $lista = $exameDao->readPaciente($paciente1);

            foreach($lista as $pacienteEncontrado){
                echo"<option value = '{$pacienteEncontrado->getId()}'>{$pacienteEncontrado->getNome()}</option>";
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