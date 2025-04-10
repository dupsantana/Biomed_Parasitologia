<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifing</title>
    <link rel="stylesheet" href="styleleo.css">
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
            position: fixed;         
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-position: center;
            z-index: -1;             
            
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="col-md-5 image-container">
            <img src="https://sdmntprwestus.oaiusercontent.com/files/00000000-e508-6230-8bb4-ec5d15cd3edc/raw?se=2025-04-10T01%3A06%3A39Z&sp=r&sv=2024-08-04&sr=b&scid=ded2ae21-93b0-5781-b0c1-afd6b655aaed&skoid=e4438ed3-2a6f-4fd3-bf63-222012dc627c&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-04-09T20%3A53%3A30Z&ske=2025-04-10T20%3A53%3A30Z&sks=b&skv=2024-08-04&sig=HCM1kQEhNQdOowSSDhHnLhkC2NOigva4Wl0NxnmHIb8%3D" alt="Imagem de exemplo" style="mask-image: radial-gradient(ellipse farthest-corner, rgba(0, 0, 0, 1) 20%, rgba(0, 0, 0, 0) 100%);">
        </div>
            <div class="col-md-7 text-center">
                <div class="form-container">
                    <h2 class="text-center mb-4" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Login</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Após digitar seu e-mail confirme o codigo, para alterar sua senha.</label>
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
    <div class="row mt-5 m-0" style="background-color: #272343; color: white;">         
        <footer class="text-center p-3">
            <p><Strong>Cleonard Solutions © 2025</Strong></p>
            <p>Developers: bigode, pelanza e Clauds</p>
        </footer>
    </div>
</body>
</html>
