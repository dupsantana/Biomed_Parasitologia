<?php 
    class ProfessorDao{
        public function insert(Professor $professor){

            try{
                $sql ="INSERT INTO professor(rgm,nome,email,senha)VALUES(:rgm, :nome, :email, :senha)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":rgm", $professor->getrgmProfessor());
                $conn->bindValue(":nome", $professor->getNome());
                $conn->bindValue(":email", $professor->getEmail());
                
                //aplicando o hash antes de salvar
                $senhaHash= password_hash($professor->getSenha(),PASSWORD_DEFAULT);
                $conn->bindValue(":senha", $senhaHash);

                //executa o insert
                return $conn->execute();

            }catch(PDOException $ex){
                echo"<p> Erro </p> <p>$ex</p>";            
            }
        }
    }
?>