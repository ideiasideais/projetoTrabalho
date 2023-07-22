<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once('cabecalho.php')?>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
      </div>
    
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/01-plastico.png" alt="Los Angeles" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:red; background-color:white">1 Lixo Pástico</h3>
            <p style="font-size:20pt; color:black; background-color:yellow">"A natureza também precisa de higiene e respeito, faça dela sua casa".</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/02-aluminio.png" alt="Chicago" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">2 Lixo Vidro</h3>
            <p style="font-size:20pt; color:blue">"Se cada um fizer a sua parte, todos se tornarão muito"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/03-borracha.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">3 Borracha Também é produto reciclável</h3>
            <p style="font-size:20pt; color:yellow">"A natureza está pedindo socorro, mas poucas pessoas entende a linguagem dela"!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/04-borracha.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">4 Pneus jogados no mar</h3>
            <p style="font-size:20pt; color:blue">"Borracha não serve para ser casa de peixes"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/05-borracha.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">5 Pneus queimando</h3>
            <p style="font-size:20pt; color:blue">"Qual a esperança que há para o futuro da nação e do planeta?"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/06-descartaveis.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">6 Lixo na Praia</h3>
            <p style="font-size:20pt; color:blue">"No mar é morada de peixes, não lixeira"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/07-queimadas.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3 style="color:black">7 Queimada de lixo</h3>
            <p style="font-size:20pt; color:yellow">"Será se o filtro para purificar esse ar será os nossos pulmões?"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/08-mar.png" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>8 Latinhas no fundo do mar</h3>
            <p style="font-size:20pt; color:blue">"Seria uma ótima faze da vida se os peixes também aprendessem a reciclar os descartáveis"</p>
          </div>
        </div>
      </div>
    
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="font-size:20pt; color:yellow;">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon" style="font-size:20pt; color:yellow">Next</span>
      </button>
    </div>
</body>
</html>
