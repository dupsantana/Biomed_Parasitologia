<?php 
    class ProfessorDao{
        // --------------------CREATE--------------------//

        public function insert(Professor $professor){

            try{
                $sql ="INSERT INTO professor(rgmProfessor,nome,email,senha)VALUES(:rgmProfessor, :nome, :email, :senha)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":rgmProfessor", $professor->getRgmProfessor());
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

        
        
        // --------------------READ--------------------//

        public function read(){

            try{                 
            $sql = "SELECT * FROM professor";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->execute();
            $lista = $conn->fetchAll(PDO::FETCH_ASSOC);

            

            $listaProfessor = array();
            foreach($lista as $linha){
                $professorEncontrado = new Professor();
                $professorEncontrado ->setId($linha['id']);
                $professorEncontrado->setRgmProfessor($linha['rgmProfessor']);
                $professorEncontrado->setNome($linha['nome']);
                $professorEncontrado->setEmail($linha['email']);
                $listaProfessor[] = $professorEncontrado;
                
            }
                return $listaProfessor;

            }catch(PDOException $ex){
                echo"<p>Erro ao fazer a consulta".$ex->getMessage()."</p>";
            }
        }


        // --------------------DELETE--------------------//
        public function delete($rgm){
            
            try{
                //QUERY QUE VAI DELETAR
            $sql = "DELETE FROM PROFESSOR WHERE rgmProfessor = '$rgm'";

           $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->execute();
                return true;

            }
            catch(PDOException $ex) {
            echo "<p>Erro ao excluir: " . $ex->getMessage() . "</p>";
            return false;
        }


    }

}

?>