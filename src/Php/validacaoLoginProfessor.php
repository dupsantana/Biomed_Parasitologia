 
    <?php
    session_start();
    require_once 'classesphp/Pessoa.php';
    require_once 'classesphp/Usuario.php';
    require_once 'classesphp/cadastroAluno.php';
    require_once 'classesphp/Professor.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        /*$nome ="Claudemir";
        $email ="Clau@gmail.com";
        $senha = "admin";
        $rgm = "1234";
        
        $aluno = new Aluno($nome, $email, $senha, $rgm); */
        
        $professor = new Professor("Leonardo", "leu@gmail.com", "admin", "5678");//o objeto professor

        //verifica se o rgm e senha estão corretos
        if($professor->getRgmProfessor() != $_POST["userRGMProfessor"] || $professor->getSenha()!= $_POST["userPassword"] ){
            echo "<p>RGM ou senha de professor invalido</p>";
        }else{
            //se estiver correto é direcionado para pádina do professor
            header("Location: ../pages/tutor.php");
            exit();
        }

        

        
        
    }          
?>          