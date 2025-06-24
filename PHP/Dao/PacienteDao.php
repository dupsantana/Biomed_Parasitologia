<?php
class PacienteDao {

    // CREATE
    public function insert(Pacientes $pacientes) {
        try {
            $sql = "INSERT INTO pacientes(nome, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento) 
                    VALUES (:nome, :telefone, :pacienteMail, :nomeMae, :medicamento, :nome_medicamento)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $pacientes->getNome());
            $conn->bindValue(":telefone", $pacientes->getTelefone());
            $conn->bindValue(":pacienteMail", $pacientes->getPacienteMail());
            $conn->bindValue(":nomeMae", $pacientes->getNomeMae());
            $conn->bindValue(":medicamento", $pacientes->getMedicamento());
            $conn->bindValue(":nome_medicamento", $pacientes->getNome_medicamento());
            return $conn->execute();
        } catch(PDOException $ex) {
            echo "<p>Erro ao inserir paciente: $ex</p>";
            return false;
        }
    }

    // READ ALL
    public function readAll() {
        try {
            $sql = "SELECT * FROM pacientes";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->execute();
            return $conn->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo "<p>Erro ao buscar pacientes: $ex</p>";
            return false;
        }
    }

    // READ BY ID
    public function readById($id) {
        try {
            $sql = "SELECT * FROM pacientes WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":id", $id);
            $conn->execute();
            return $conn->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo "<p>Erro ao buscar paciente por ID: $ex</p>";
            return false;
        }
    }

    // UPDATE
    public function update(Pacientes $pacientes) {
        try {
            $sql = "UPDATE pacientes SET 
                        nome = :nome, 
                        telefone = :telefone, 
                        pacienteMail = :pacienteMail, 
                        nomeMae = :nomeMae, 
                        medicamento = :medicamento, 
                        nome_medicamento = :nome_medicamento
                    WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $pacientes->getNome());
            $conn->bindValue(":telefone", $pacientes->getTelefone());
            $conn->bindValue(":pacienteMail", $pacientes->getPacienteMail());
            $conn->bindValue(":nomeMae", $pacientes->getNomeMae());
            $conn->bindValue(":medicamento", $pacientes->getMedicamento());
            $conn->bindValue(":nome_medicamento", $pacientes->getNome_medicamento());
            $conn->bindValue(":id", $pacientes->getId());
            return $conn->execute();
        } catch(PDOException $ex) {
            echo "<p>Erro ao atualizar paciente: $ex</p>";
            return false;
        }
    }

    // DELETE
    public function delete($id) {
        try {
            $sql = "DELETE FROM pacientes WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":id", $id);
            return $conn->execute();
        } catch(PDOException $ex) {
            echo "<p>Erro ao deletar paciente: $ex</p>";
            return false;
        }
    }
}
?>