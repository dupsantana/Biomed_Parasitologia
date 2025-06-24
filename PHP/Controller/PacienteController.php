
<?php 
require_once "../Dao/PacienteDao.php";
require_once "../Model/Pacientes.php";

class PacienteController {

    private $pacienteDao;

    public function __construct() {
        $this->pacienteDao = new PacienteDao();
    }

    // CREATE
    public function inserir($dados) {
        $paciente = new Pacientes();
        $paciente->setNome($dados['nome']);
        $paciente->setDatanasc($dados['datanasc']);
        $paciente->setTelefone($dados['telefone']);
        $paciente->setPacienteMail($dados['pacienteMail']);
        $paciente->setNomeMae($dados['nomeMae']);
        $paciente->setMedicamento($dados['medicamento']);
        $paciente->setNome_medicamento($dados['nome_medicamento']);
        return $this->pacienteDao->insert($paciente);
    }

    // READ ALL
    public function listarTodos() {
        return $this->pacienteDao->readAll();
    }

    // READ BY ID
    public function buscarPorId($id) {
        return $this->pacienteDao->readById($id);
    }

    // UPDATE
    public function atualizar($dados) {
        $paciente = new Pacientes();
        $paciente->setId($dados['id']);
        $paciente->setNome($dados['nome']);
        $paciente->setDatanasc($dados['datanasc']);
        $paciente->setTelefone($dados['telefone']);
        $paciente->setPacienteMail($dados['pacienteMail']);
        $paciente->setNomeMae($dados['nomeMae']);
        $paciente->setMedicamento($dados['medicamento']);
        $paciente->setNome_medicamento($dados['nome_medicamento']);
        return $this->pacienteDao->update($paciente);
    }

    // DELETE
    public function deletar($id) {
        return $this->pacienteDao->delete($id);
    }
}
?>

?>