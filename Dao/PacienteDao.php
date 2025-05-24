<?php
    class PacienteDao{
        public function insert(Pacientes $pacientes){

            try{
                $sql ="INSERT INTO pacientes(regis, datanasc, telefone, pacienteMail, nomeMae, epf, sangueoculto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento) VALUE 
                (:regis, :datanasc, :telefone, :pacienteMail, :nomeMae, :epf, :sangueoculto, :naosolici, :medicamento_sim, :medicamento_nao, :nome_medicamento)"
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":regis", $pacientes->getRegis());
                $conn->bindValue(":datanasc", $pacientes->getDataNasc());
                $conn->bindValue(":regis", $pacientes->getTelofone());
                $conn->bindValue(":regis", $pacientes->getPacienteMail());
                $conn->bindValue(":regis", $pacientes->getNomeMae());
                $conn->bindValue(":regis", $pacientes->getEpf());
                $conn->bindValue(":regis", $pacientes->getSangueOculto());
                $conn->bindValue(":regis", $pacientes->getRegis());
                $conn->bindValue(":regis", $pacientes->getRegis());
                $conn->bindValue(":regis", $pacientes->getRegis());
                $conn->bindValue(":regis", $pacientes->getRegis());


            }
        }
    }
?>