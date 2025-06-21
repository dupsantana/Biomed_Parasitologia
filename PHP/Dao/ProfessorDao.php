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

            

            $listaProfessor = [];
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
       
    


        // --------------------GET RGM--------------------//

        public function getRgm($rgm){
            try{
                $sql = "SELECT *FROM professor WHERE rgmProfessor = :rgm";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(':rgm', $rgm);
                $conn->execute();
                $linha = $conn->fetch(PDO::FETCH_ASSOC);

                if ($linha){
                    $professor = new Professor();
                    $professor->setId($linha['id']);
                    $professor->setRgmProfessor($linha['rgmProfessor']);
                    $professor->setNome($linha['nome']);
                    $professor->setEmail($linha['email']);
                    $professor->setSenha($linha['senha']);

                    return $professor;
                }

                return null;
            } catch(PDOException $ex){
                echo "<p>Erro ao buscar professor: " .$ex->getMessage() . "</p>";
                return null;
            }
        }

         // --------------------UPDATE--------------------//

         public function getid($id){
            try{
                $sql = "SELECT *FROM professor WHERE id = :id";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(':id', $id);
                $conn->execute();
                $linha = $conn->fetch(PDO::FETCH_ASSOC);

              $lista=[];  
              foreach($linha as $chave => $valor){
                
                
                   

                $lista[] = $valor;


              }
              $professor = new Professor();

                $professor->setId($lista[0]);
                $professor->setRgmProfessor($lista[1]);
                $professor->setNome($lista[2]);
                $professor->setEmail($lista[3]);
                $professor->setSenha($lista[4]);

              return $professor;





            } catch(PDOException $ex){
                echo "<p>Erro ao buscar professor: " .$ex->getMessage() . "</p>";
                return null;
            }
        }

}

?>