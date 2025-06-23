<?php
require '../Model/Usuario.php';
require '../Dao/ProfessorDao.php';
require '../Dao/ConnectionFactory.php';
require '../Model/Professor.php';

$professorDao = new ProfessorDao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['salvar_professor'])) {

        $professor = new Professor();

        // Se existir id, é edição
        if (!empty($_POST['id'])) {
            $professor->setId($_POST['id']);
        }

        $professor->setNome($_POST['userNameProfessor']);
        $professor->setRgmProfessor($_POST['userRGMProfessor']);
        $professor->setEmail($_POST['userEmailProfessor']);

        // Tratar senha
        if (!empty($_POST['userPasswordProfessor'])) {
            // Se usuário digitou senha nova, cria hash
            $senhaHash = password_hash($_POST['userPasswordProfessor'], PASSWORD_DEFAULT);
            $professor->setSenha($senhaHash);
        } else {
            if (!empty($_POST['id'])) {
                // Se não digitou senha e está editando, mantém a senha antiga
                $professorExistente = $professorDao->getid($_POST['id']);
                $professor->setSenha($professorExistente->getSenha());
            } else {
                // Se não tem id e não digitou senha, erro
                echo "Senha obrigatória para novo cadastro!";
                exit();
            }
        }

        if (!empty($_POST['id'])) {
            // Atualizar professor
            $professorDao->update($professor);
        } else {
            // Inserir professor novo
            $professorDao->insert($professor);
        }

        header("Location: ../View/listaProfessores.php");
        exit();
    }

    // --- EXCLUIR PROFESSOR ---
    if (isset($_POST['delete_professor'])) {
        $rgm = $_POST['rgm_to_delete'];
        if ($professorDao->delete($rgm)) {
            header("Location: Professor.php");
            exit();
        } else {
            echo "<p>Erro ao excluir professor.</p>";
        }
    }
}

function lerProfessor()
{
    $professorDao = new ProfessorDao();
    $lista = $professorDao->read();

    foreach ($lista as $professor) {
        echo " <tr>
                    <td>{$professor->getRgmProfessor()}</td>
                    <td>{$professor->getNome()}</td>
                    <td>{$professor->getEmail()}</td>
                    <td>
                        <a href='Telacadastro_professor.php?editar={$professor->getId()}' class='btn btn-primary btn-sm'>Editar</a>
                        <form method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='rgm_to_delete' value='{$professor->getRgmProfessor()}'>
                            <button type='submit' name='delete_professor' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza?\")'>Excluir</button>
                        </form>
                    </td>
                </tr>";
    }
}

if (isset($_GET['editar'])) {
    $identProfessor = $_GET['editar'];
    $professorDao = new ProfessorDao();
    $professorEncontrado = $professorDao->getid($identProfessor);
}
