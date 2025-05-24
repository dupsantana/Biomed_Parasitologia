<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #e1dfe7;
        }
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .form-container {
            width: 100%;
            max-width: 500px;
            background-color: #272343;
            color: #e1dfe7;
            padding: 2rem;
            border-radius: 8px;
            margin: 0 auto;
        }
        footer {
            background-color: #272343;
            color: white;
            padding: 1rem;
            margin-top: auto;
        }

        header{
            color: white;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        }
    </style>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header style="background-color: #272343;">
        <div class="container">
            <div class="row p-4">
                <div class="col-12 text-center">
                    <h1>CLINICODE</h1>
                </div>
            </div>
        </div>
    </header>
    
    <main>    
        <!-- Container principal do formulário -->
        <div class="form-container">
            <h2 class="text-center mb-4 display-5" style="color: white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Cadastro de Pacientes</h2>
            <form action="TelaLogin1.php" method="post">
                <!-- Campos de input -->
                <div class="row mt-3">               
                    <label for="regis" class="form-label">Nome Paciente</label>
                    <input type="text" name="regis" class="form-control" required>              
                </div>           
                <div class="row mt-3">
                    <label for="datanasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="datanasc" maxlength="8" required>
                </div>
                <div class="row mt-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" placeholder="(00) 00000-0000" id="telefone">
                </div> 
                <div class="row mt-3">
                    <label for="pacienteMail" class="form-label">Email</label>
                    <input type="mail" name="pacienteMail" class="form-control" placeholder="name@example.com" required>
                </div>               
                <div class="row mt-3">
                    <label for="nomeMae" class="form-label">Nome da mãe</label>
                    <input type="text" name="nomeMae" class="form-control">
                </div>
                <br>
                <div class="container">
                    <label class="form-label fw-bold fs-5">Selecione uma Opção</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="epf" id="examepf">
                        <label class="form-check-label" for="examepf">
                            Exame parasitológico de fezes.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sangueocult" id="sangueoculto">
                        <label class="form-check-label" for="sangeueoculto">
                            Sangue oculto.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="naosolici" id="naosolicitado">
                        <label class="form-check-label" for="naosolicitado">
                            Não foi solicitado.
                        </label>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold fs-5">Você toma algum medicamento? Se sim, qual?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="medicamento" id="medicamento_sim" value="sim">
                            <label class="form-check-label" for="medicamento_sim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="medicamento" id="medicamento_nao" value="nao" checked>
                            <label class="form-check-label" for="medicamento_nao">Não</label>
                        </div>
                    </div>
                    <div class="mb-3" id="campo_medicamento" style="display: none;">
                        <label for="qual_medicamento" class="form-label">Qual medicamento?</label>
                        <input type="text" class="form-control" id="qual_medicamento" placeholder="Digite o nome do medicamento">
                    </div>
                </div>
               
                <div class="row mt-3">
                    <button type="submit" class="btn btn-info">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="text-center">
        <p><strong>Cleonard Solutions © 2025</strong></p>
        <p>Developers: bigode, pelanza e Clauds</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#telefone').mask('(00) 00000-0000');
        
        $('input[name="medicamento"]').change(function() {
            if ($('#medicamento_sim').is(':checked')) {
                $('#campo_medicamento').show();
            } else {
                $('#campo_medicamento').hide();
            }
        });
    });
    </script>
</body>
</html>