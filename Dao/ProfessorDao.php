<?php 
    class ProfessorDao{
        public function insert(Professor $professor){

            try{
                $sql ="INSERT INTO professor(rgmProfessor,nome,email,senha)VALUES(:rgmProfessor, :nome, :email, :senha)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":rgmProfessor", $professor->getrgmProfessor());
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