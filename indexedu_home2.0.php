<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>

</head>


<body>

  
      <header>
              <?php
                  include "cabeçalho.php";
              ?>
      </header>
  



              
                <div class="row">
                        <div class= "ms-5 w-50 " id="carrossel">
                                  <div id="carouselExampleAutoplaying" class="col-12 carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="imagens/Design sem nome.svg" class="d-block w-100" alt="...">
                                          </div>
                                      <div class="carousel-item">
                                        <img src="imagens/Quadro.svg" class="d-block w-100" alt="...">
                                      </div>
                                          <div class="carousel-item">
                                            <img src="imagens/Shaft portoes.svg" class="d-block w-100" alt="...">
                                          </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                       </div>
                  </div>
              </div>     

</body>
</html>