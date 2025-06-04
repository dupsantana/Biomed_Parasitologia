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

        public function read(){

            try{                 
            $sql = "SELECT * FROM professor";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->execute();
            $lista = $conn->fetchAll(PDO::FETCH_ASSOC);
            $listaProfessor = array();
            foreach($lista as $linha){
                $professorEncontrado = new Professor();
                $professorEncontrado->setRgmProfessor($linha['rgm']);
                $professorEncontrado->setNome($linha['nome']);
                $professorEncontrado->setEmail($linha['email']);
                $listaProfessor[] = $professorEncontrado;
            }
                return $listaProfessor;

            }catch(PDOException $ex){
                echo"<p>Erro ao fazer a consulta".$ex->getMessage()."</p>";
            }
        }
    }
?>