<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url ('css/stile.css')}}">
    <title>INVENTARIO</title>
</head>
<body>
<nav class="navbar navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">INVENTARIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Products') }}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Promociones') }}">Promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ubicacion') }}">Ubicaion</a>
      </li>
      </li><li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container col-md-6  mt-3">
            <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/bacardi.png" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/cremaw.jpg"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/ron.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/smirnoff.png" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/tequila.png" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/whisky.png" alt="...">
                  </div>
                  </div>
              </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>