 
    <?php
    require_once 'classesphp/Pessoa.php';
    require_once 'classesphp/Usuario.php';
    require_once 'classesphp/cadastroAluno.php';

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        
        $nome = $_POST["userName"];
        $email = $_POST["userEmail"];
        $senha = $_POST["userPassword"];
        $rgm = $_POST["userRGM"];
        
        $aluno = new Aluno($nome, $email, $senha, $rgm); 
        
    
    }          
?>          