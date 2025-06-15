<?php
require '../Model/Usuario.php';
require '../Dao/ProfessorDao.php';
require '../Dao/ConnectionFactory.php';
require '../Model/Professor.php';




$professor = new Professor();
$professorDao = new ProfessorDao;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['cprofessor'])) {
        $professor->setNome($_POST['userNameProfessor']);
        $professor->setrgmProfessor($_POST['userRGMProfessor']);
        $professor->setEmail($_POST['userEmailProfessor']);
        $professor->setSenha($_POST['userPasswordProfessor']);
        $professorDao->insert($professor);//aqui ele chamou a função inserir(Criar) do AlunoDao mas poderia ser outra(delete,update,read);
        header("location:../View/listaProfessores.php");//Muda a localização para outra página//


    }
}

// --- PROCESSAR EXCLUSÃO --- //
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_professor'])) {
    $rgm = $_POST['rgm_to_delete'];
    $professorDao = new ProfessorDao();
    if ($professorDao->delete($rgm)) {
        header("Location: Professor.php"); // Recarrega a página após excluir
        exit();
    } else {
        echo "<p>Erro ao excluir professor.</p>";
    }
}


function lerProfessor()
{
    $professor = new Professor();
    $professorDao = new ProfessorDao;
    $lista = $professorDao->read();

    foreach ($lista as $professor) {
        echo " <tr>
                    <td>{$professor->getRgmProfessor()}</td>
                    <td>{$professor->getNome()}</td>
                    <td>{$professor->getEmail()}</td>
                    <td>
                    <!-- Botão Editar -->
                    <a href='editar_professor.php?rgm={$professor->getRgmProfessor()}' class='btn btn-primary btn-sm'>
                    Editar
                    </a>

                    
                      <!-- Botão Excluir -->
                <form method='POST' action='' style='display: inline;'>
                    <input type='hidden' name='rgm_to_delete' value='{$professor->getRgmProfessor()}'>
                    <button type='submit' name='delete_professor' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza?\")'>
                        Excluir
                    </button>
                </form>
                  </td>

                </tr>";
    }
}












?>