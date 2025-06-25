<?php
require_once "../Dao/PacienteDao.php";
require_once "../Model/Pacientes.php";

class PacienteController
{
    private $pacienteDao;

    public function __construct()
    {
        $this->pacienteDao = new PacienteDao();
    }

    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Pacientes();
            $paciente->setNome($_POST['nome']);
            $paciente->setTelefone($_POST['telefone']);
            $paciente->setPacienteMail($_POST['pacienteMail']);
            $paciente->setNomeMae($_POST['nomeMae']);
            $paciente->setMedicamento($_POST['medicamento']);
            $paciente->setNome_medicamento($_POST['nome_medicamento']);

            $resultado = $this->pacienteDao->insert($paciente);

            if ($resultado) {
                echo"<script>window.location.href='../View/Professor.php';</script>";
                exit;
            } else {
                echo "<script>alert('Erro ao cadastrar paciente!'); window.history.back();</script>";
                exit;
            }
        }
    }
}

// Fora da classe, apenas isto:
$controller = new PacienteController();
$controller->cadastrar();

    
