<?php
    class PacienteDao{
        public function insert(Pacientes $pacientes){

            try{
                $sql ="INSERT INTO pacientes(nome, dataNasc, dataExame, pereiodo, telefone, pacienteMail, nomeMae, epf, sangueOculto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento) VALUE (:nome, :datanasc, :dataExame, :periodo, :telefone, :pacienteMail, :nomeMae, :epf, :sangueoculto, :naosolici, :medicamento_sim, :medicamento_nao, :nome_medicamento)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":nome", $pacientes->getNome());
                $conn->bindValue(":dataNasc", $pacientes->getDataNasc());
                $conn->bindValue(":dataExame", $pacientes->getDataExame());
                $conn->bindValue(":periodo", $pacientes->getPeriodo());
                $conn->bindValue(":telefone", $pacientes->getTelefone());
                $conn->bindValue(":pacienteMail", $pacientes->getPacienteMail());
                $conn->bindValue(":nomeMae", $pacientes->getNomeMae());
                $conn->bindValue(":epf", $pacientes->getEpf());
                $conn->bindValue(":sangueOculto", $pacientes->getSangueOculto());
                $conn->bindValue(":naoSolici", $pacientes->getNaoSolici());
                $conn->bindValue(":medicamento_sim", $pacientes->getMedicamento_sim());
                $conn->bindValue(":medicamento_nao", $pacientes->getMedicamento_nao());
                $conn->bindValue(":nome_medicamento", $pacientes->getNome_medicamento());
                //executa o insert                
                return $conn->execute();
            }catch(PDOException $ex){

                echo "<p> Erro </p> <p>$ex</p>";
            }
            
        }
    }
?>