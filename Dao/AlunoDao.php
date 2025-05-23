<?php 
    class AlunoDao{
        public function insert(Aluno $aluno){

            try{
                $sql ="INSERT INTO aluno(rgmAluno,nome,email,senha)VALUES(:rgmAluno, :nome, :email, :senha)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":rgmAluno", $aluno->getrgm());
                $conn->bindValue(":nome", $aluno->getNome());
                $conn->bindValue(":email", $aluno->getEmail());
                
                //aplicando o hash antes de salvar
                $senhaHash= password_hash($aluno->getSenha(),PASSWORD_DEFAULT);
                $conn->bindValue(":senha", $senhaHash);

                //executa o insert
                return $conn->execute();

            }catch(PDOException $ex){
                echo"<p> Erro </p> <p>$ex</p>";            
            }
        }
    }
?>