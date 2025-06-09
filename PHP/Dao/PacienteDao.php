<?php
    class PacienteDao{
        public function insert(Pacientes $pacientes){

            try{
                $sql ="INSERT INTO pacientes(nome, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento) VALUE (:nome, :telefone, :pacienteMail, :nomeMae, :medicamento, :nome_medicamento)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":nome", $pacientes->getNome());               
                $conn->bindValue(":telefone", $pacientes->getTelefone());
                $conn->bindValue(":pacienteMail", $pacientes->getPacienteMail());
                $conn->bindValue(":nomeMae", $pacientes->getNomeMae());
                $conn->bindValue(":medicamento", $pacientes->getMedicamento());
                $conn->bindValue(":nome_medicamento", $pacientes->getNome_medicamento());
                //executa o insert                
                return $conn->execute();
            }catch(PDOException $ex){

                echo "<p> Erro </p> <p>$ex</p>";
            }
            
        }
    }
    /*id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    pacienteMail VARCHAR(50) NOT NULL,
    nomeMae VARCHAR(80) NOT NULL,
    medicamento BOOLEAN NOT NULL,
    nome_medicamento VARCHAR(50)*/
?>