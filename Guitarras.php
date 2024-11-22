<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Imagens/estilo.css">
    <title>Guitarras</title>
</head>
<body style="background-image:url('Imagens/Orgao-Catedral.jpg'); background-repeat: no-repeat; background-size: 100%;">


    <!-- Parte de cima do site (Navbar) -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Inicial.php">Loja Instrumental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Carrinho</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acessos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="CadastrarPessoa.php">Cadastro</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Instrumentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Violinos.php">Violinos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="Guitarras.php">Guitarras</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="Piano.php">Pianos</a></li>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configurações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ConsultarCodigo.php">Consultar</a></li>
                            <li><a class="dropdown-item" href="PaginaAtualizar.php">Atualizar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="PaginaExcluir.php">Excluir</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar Instrumento" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Busca</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Fim da parte de cima do site -->


    <!-- Inicio dos cards -->
    <div class="container text-center">
        <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/736x/aa/02/6a/aa026abdc597e418f2ece538aa2315ad.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Guitarras Personalizadas</h5>
                <p class="card-text">Caso você queira personalizar uma Guitarra sua ou comprar um personalizado você poder clicar aqui.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.researchgate.net/profile/Rafael-Dos-Santos-3/publication/294183694/figure/fig1/AS:449343535751168@1484143255460/Figura-1-Componentes-e-partes-da-guitarra-eletrica-confeccionada-Figure-1-Components.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Guitarra e seus componentes.</h5>
                <p class="card-text">Caso esteja com algum componente de sua guitarra, através dessa imagem você pode identificar qual parte esta faltando ou precisando de conserto. Onde nós podemos resolver seu problema.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://beat360.com.br/wp-content/uploads/2021/05/Melhores-Guitarras.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Cursos para Guitarras</h5>
                <p class="card-text">Aqui nós temos cursos do básico ao avançado com a Guitarra , contendo vídeo aulas e aulas ao vivo para o usuário.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        </div>
    </div>

</body>
</html>