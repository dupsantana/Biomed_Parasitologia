<?php
session_start();

require_once '../Dao/ConnectionFactory.php';
require_once '../Dao/ProfessorDao.php';
require_once '../Dao/AlunoDao.php';

function redirect($url) {
    header("Location: $url");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rgm = $_POST['userRGMProfessor'] ?? '';
    $senhaDigitada = $_POST['userPassword'] ?? ''; // senha que usuário digitou

    if (empty($rgm) || empty($senhaDigitada)) {
        $_SESSION['login_error'] = "Por favor, preencha todos os campos.";
        redirect('../View/TelaLogin1.php');
    }

    $professorDao = new ProfessorDao();
    $professor = $professorDao->getRgm($rgm);

    if ($professor) {
        $senhaHashDoBanco = $professor->getSenha(); // senha hashada salva no banco
        
        // Verifica se a senha digitada corresponde ao hash do banco
        if (password_verify($senhaDigitada, $senhaHashDoBanco)) {
            $_SESSION['user_type'] = 'professor';
            $_SESSION['user_id'] = $professor->getId();
            $_SESSION['user_name'] = $professor->getNome();
            redirect('../View/Professor.php');
        } else {
            $_SESSION['login_error'] = "Senha incorreta.";
            redirect('../View/TelaLogin1.php');
        }
    } else {
        $alunoDao = new AlunoDao();
        $aluno = $alunoDao->getRgm($rgm);

        if ($aluno) {
            $senhaHashDoBanco = $aluno->getSenha();

            if (password_verify($senhaDigitada, $senhaHashDoBanco)) {
                $_SESSION['user_type'] = 'aluno';
                $_SESSION['user_id'] = $aluno->getId();
                $_SESSION['user_name'] = $aluno->getNome();
                redirect('../View/aluno.php');
            } else {
                $_SESSION['login_error'] = "Senha incorreta.";
                redirect('../View/TelaLogin1.php');
            }
        } else {
            $_SESSION['login_error'] = "Usuário não encontrado.";
            redirect('../View/TelaLogin1.php');
        }
    }
} else {
    redirect('../View/TelaLogin1.php');
}
