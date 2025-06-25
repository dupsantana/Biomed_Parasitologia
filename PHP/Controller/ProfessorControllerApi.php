<?php

require '../Model/Usuario.php';
require '../Model/Professor.php';
require '../Dao/ProfessorDaoApi.php';

// Instância do DAO que comunica com a API Node.js
$professorDao = new ProfessorDaoApi();

// Trata requisições de formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Salvar (inserir ou atualizar)
    if (isset($_POST['salvar_professor'])) {
        $professor = new Professor();
        // Se existir id, é edição
        if (!empty($_POST['id'])) {
            $professor->setId((int) $_POST['id']);
        }
        // Define nome e email a partir do form
        $professor->setNome($_POST['userNameProfessor']);
        $professor->setEmail($_POST['userEmailProfessor']);

        if (!empty($_POST['id'])) {
            // Atualização via API
            $professorDao->update($professor);
        } else {
            // Criação via API
            $professorDao->insert($professor);
        }

        header("Location: ../View/listaProfessores.php");
        exit();
    }

    // Excluir professor
    if (isset($_POST['delete_professor'])) {
        $idToDelete = (int) ($_POST['id_to_delete'] ?? 0);
        if ($idToDelete && $professorDao->delete($idToDelete)) {
            header("Location: ../View/listaProfessores.php");
            exit();
        } else {
            echo "<p>Erro ao excluir professor.</p>";
        }
    }
}

/**
 * Exibe na tela a lista de professores
 */
function lerProfessor() {
    global $professorDao;
    $lista = $professorDao->read();
    if (!$lista) {
        echo "<tr><td colspan=4>Nenhum professor encontrado.</td></tr>";
        return;
    }

    foreach ($lista as $professor) {
        echo "<tr>";
        echo "<td>{$professor->getId()}</td>";
        echo "<td>{$professor->getNome()}</td>";
        echo "<td>{$professor->getEmail()}</td>";
        echo "<td>";
        echo "<a href='Telacadastro_professor.php?editar={$professor->getId()}' class='btn btn-primary btn-sm'>Editar</a> ";
        echo "<form method='POST' action='' style='display:inline;'>";
        echo "<input type='hidden' name='id_to_delete' value='{$professor->getId()}'>";
        echo "<button type='submit' name='delete_professor' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza?\")'>Excluir</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
}

// Se veio parâmetro de editar, carrega o professor para preencher o formulário
$professorEncontrado = null;
if (isset($_GET['editar'])) {
    $professorEncontrado = $professorDao->readById((int) $_GET['editar']);
}

?>
