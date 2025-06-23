<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="styleedu_1.1.css">
</head>
<body>

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    main {
        flex: 1;
        background-color: #e1dfe7;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<?php 
    include '../Model/trechosCod.php';
    cabecalho();

    require '../Controller/ProfessorController.php';
?>

<main>
    <div class="container-fluid p-3" style="background-color:#e1dfe7">
        <div class="row justify-content-center">

            <div class="col-lg-4 d-none d-lg-block"></div>

            <div class="col-12 col-sm-10 col-md-8 col-lg-4 p-4 rounded" style="background-color: #272343; color: #e1dfe7;">
                <h2 class="text-center mb-4 display-5" style="color: white; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                    <?= isset($professorEncontrado) ? 'Editar Professor' : 'Cadastrar Professor' ?>
                </h2>

                <form action="../Controller/ProfessorController.php" method="post" name="cprofessor">
                    <!-- Campo escondido com o ID para edição -->
                    <input type="hidden" name="id" value="<?= isset($professorEncontrado) ? $professorEncontrado->getId() : '' ?>">

                    <div class="row mt-3">
                        <label for="userNameProfessor" class="form-label">Nome</label>
                        <input type="text" name="userNameProfessor" class="form-control" required
                            value="<?= isset($professorEncontrado) ? $professorEncontrado->getNome() : '' ?>">
                    </div>

                    <div class="row mt-3">
                        <label for="userRGMProfessor" class="form-label">Código Professor</label>
                        <input type="text" name="userRGMProfessor" class="form-control" placeholder="0000000000" maxlength="10" required
                            value="<?= isset($professorEncontrado) ? $professorEncontrado->getRgmProfessor() : '' ?>">
                    </div>

                    <div class="row mt-3">
                        <label for="userEmailProfessor" class="form-label">Email</label>
                        <input type="email" name="userEmailProfessor" class="form-control" placeholder="user@exemplo.com" required
                            value="<?= isset($professorEncontrado) ? $professorEncontrado->getEmail() : '' ?>">
                    </div>

                    <div class="row mt-3">
                        <label for="userPasswordProfessor" class="form-label">Senha</label>
                        <input type="password" name="userPasswordProfessor" class="form-control"
                            placeholder="<?= isset($professorEncontrado) ? 'Digite nova senha para alterar' : 'Senha' ?>">
                    </div>

                    <div class="row mt-3">
                        <button type="submit" name="salvar_professor" class="btn btn-info w-100">
                            <?= isset($professorEncontrado) ? 'Atualizar' : 'Cadastrar' ?>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 d-none d-lg-block"></div>
        </div>
    </div>
</main>

<?php footer(); ?>

</body>
</html>
