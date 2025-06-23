<?php 
class ProfessorDao {

    // --------------------CREATE--------------------//
    public function insert(Professor $professor){
        try{
            $sql ="INSERT INTO professor(rgmProfessor,nome,email,senha) VALUES (:rgmProfessor, :nome, :email, :senha)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":rgmProfessor", $professor->getRgmProfessor());
            $conn->bindValue(":nome", $professor->getNome());
            $conn->bindValue(":email", $professor->getEmail());
            // senha já vem hash no professor (hash no controller)
            $conn->bindValue(":senha", $professor->getSenha());
            return $conn->execute();

        }catch(PDOException $ex){
            echo"<p> Erro ao inserir: </p> <p>{$ex->getMessage()}</p>";            
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
                $professorEncontrado->setId($linha['id']);
                $professorEncontrado->setRgmProfessor($linha['rgmProfessor']);
                $professorEncontrado->setNome($linha['nome']);
                $professorEncontrado->setEmail($linha['email']);
                // senha não é exibida aqui, ok
                $listaProfessor[] = $professorEncontrado;
            }
            return $listaProfessor;

        }catch(PDOException $ex){
            echo"<p>Erro ao fazer a consulta: ".$ex->getMessage()."</p>";
        }
    }

    // --------------------DELETE--------------------//
    public function delete($rgm){
        try{
            $sql = "DELETE FROM professor WHERE rgmProfessor = :rgm";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(':rgm', $rgm);
            $conn->execute();
            return true;

        } catch(PDOException $ex) {
            echo "<p>Erro ao excluir: " . $ex->getMessage() . "</p>";
            return false;
        }
    }

    // --------------------GET BY RGM--------------------//
    public function getRgm($rgm){
        try{
            $sql = "SELECT * FROM professor WHERE rgmProfessor = :rgm";
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

    // --------------------GET BY ID--------------------//
    public function getid($id){
        try{
            $sql = "SELECT * FROM professor WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(':id', $id);
            $conn->execute();
            $linha = $conn->fetch(PDO::FETCH_ASSOC);

            if ($linha) {
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
    public function update(Professor $professor) {
        try {
            $sql = "UPDATE professor SET rgmProfessor = :rgmProfessor, nome = :nome, email = :email, senha = :senha WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(':rgmProfessor', $professor->getRgmProfessor());
            $conn->bindValue(':nome', $professor->getNome());
            $conn->bindValue(':email', $professor->getEmail());
            $conn->bindValue(':senha', $professor->getSenha());
            $conn->bindValue(':id', $professor->getId());
            return $conn->execute();
        } catch(PDOException $ex) {
            echo "<p>Erro ao atualizar professor: " . $ex->getMessage() . "</p>";
            return false;
        }
    }
}
?>
