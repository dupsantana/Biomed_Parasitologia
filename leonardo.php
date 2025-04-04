<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifing</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="cabecalho text-center m-0 w-100 shadow-lg" style="background-color: #272343;">
        <div class="row p-4">
            <div class="col-2 fw-bold fs-4" style="color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">CLINICODE</div>
            <div class="col-9"></div>
            <div class="col-1">
                <button class="fs-5 btn" style="background-color: wheat; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Entrar</button>
            </div>
        </div>
    </header>
    
    <style>
        .form-container {
            max-width: 400px;
            padding: 30px;
            border: 1px solid #0c0909;
            border-radius: 5px;
            background-color: #272343;
            color: white;
            
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="row w-100">
            <div class="col-md-9 image-container ">
                <img src="https://s2.glbimg.com/733VUvBnQPN0LMsG3HTXRy_g5TA=/940x523/e.glbimg.com/og/ed/f/original/2015/02/24/488182127.jpg" alt="Imagem de exemplo" style="mask-image: radial-gradient(ellipse farthest-corner, rgba(0, 0, 0, 1) 20%, rgba(0, 0, 0, 0) 100%);">
            </div>
            <div class="col-md-3 text-center">
                <div class="form-container">
                    <h2 class="text-center mb-4" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Após digitar seu e-mail confirme o codigo, para a alterar sua senha.</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-secondary" type="button" style="color: white;">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>   </div>
</body>
</html>
