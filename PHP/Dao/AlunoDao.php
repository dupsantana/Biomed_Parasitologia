<?php 
    class AlunoDao{
        public function insert(Aluno $aluno){

            try{
                $sql ="INSERT INTO aluno(rgmAluno,nome,email,senha)VALUES(:rgmAluno, :nome, :email, :senha)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":rgmAluno", $aluno->getrgmAluno());
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

        public function read(){

            try{                 
            $sql = "SELECT * FROM aluno";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->execute();

            $lista = $conn->fetchAll(PDO::FETCH_ASSOC);
            $listaAluno = array();
            foreach($lista as $linha){
                $alunoEncontrado = new Aluno();
                $alunoEncontrado ->setId($linha['id']);
                $alunoEncontrado->setrgmAluno($linha['rgmAluno']);
                $alunoEncontrado->setNome($linha['nome']);
                $alunoEncontrado->setEmail($linha['email']);
                $listaAluno[] = $alunoEncontrado;
            }
                return $listaAluno;

            }catch(PDOException $ex){
                echo"<p>Erro ao fazer a consulta".$ex->getMessage()."</p>";
            }
        }
       
    }
?>
