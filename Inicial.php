<?php
    namespace PHP\Modelo;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" tyoe="text/css" href="estilo.css">
    <title>Página Inicial</title>
    
</head>
<body>

    <!-- Parte de cima do site (Navbar) -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Página Inicial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Instrumentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Violinos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Guitarras</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Pianos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Violão</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Contra-Baixo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Flautas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Violoncelos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Harpas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Baterias</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">trompete</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Saxofone</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Trombone</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Fim da parte de cima do site -->

    <!-- Inicio do Carrosel -->
    
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!-- Fim do Carrosel -->

    <!-- Cards -->

    <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="https://i0.wp.com/www.violinovermelho.com.br/blog/wp-content/uploads/2014/08/violinos.jpg?fit=850%2C340&ssl=1" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Violinos</h5>
              <p class="card-text">Aqui você verá alguns modelos de Violinos que você poderá ver e se gostar comprar.E caso queira personalizar nós podemos fazer isso como o cliente quiser.</p>
              <a href="#" class="btn btn-primary">Ir</a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="https://lojaopenstage.com.br/upload/blog/u54Bs1o6PMGPUkCNVQmngTVA2vrG5rmeeTDj1tfk.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Guitarras</h5>
              <p class="card-text">Aqui você verá alguns modelos de Guitarras que você poderá ver e se gostar comprar. E caso queira personalizar nós podemos fazer isso como o cliente quiser.</p>
              <a href="#" class="btn btn-primary">Ir</a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="https://image.made-in-china.com/2f0j00SKabwNlgrzoP/Music-Instruments-White-Baby-Grand-Piano-Mg152W-Popular-Model.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pianos</h5>
              <p class="card-text">Aqui você verá alguns modelos de Pianos que você poderá ver e se gostar comprar.E caso queira personalizar nós podemos fazer isso como o cliente quiser.</p>
              <a href="#" class="btn btn-primary">Ir</a>
            </div>
        </div>
      </div>
      
    </div>
    </div>

    <!-- Fim do Cards -->

</ul>
</body>

</html>