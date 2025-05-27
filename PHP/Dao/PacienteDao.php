<?php
    class PacienteDao{
        public function insert(Pacientes $pacientes){

            try{
                $sql ="INSERT INTO pacientes(nome, dataNasc, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento) VALUE (:nome, :datanasc, :telefone, :pacienteMail, :nomeMae, :medicamento, :nome_medicamento)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":nome", $pacientes->getNome());
                $conn->bindValue(":dataNasc", $pacientes->getDataNasc());
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
?>