<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Imagens/estilo.css">
    <title>Piano</title>
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
                <img src="https://img-b.udemycdn.com/course/750x422/3517340_a25f_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Pianos para cada necessidade</h5>
                <p class="card-text">Caso você esteja precisando de um piano para orquestra nós temos. Quer um piano clássico assim como os outros, nós temos, sempre tentando atender a necessidade do cliente.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://super.abril.com.br/wp-content/uploads/2018/07/piano43.jpg?crop=1&resize=1212,909" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Piano e seus componentes.</h5>
                <p class="card-text">Caso esteja com problemas em alguma parte de seu piano ou ele estar com seus componentes ruins, aqui você poderá comprar os componentes.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://antoniopianos.com.br/wp-content/uploads/elementor/thumbs/foto-piano-02-pk81e10hic8ahkmqrovwbyvjf8t4tghukfodoasb3g.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Cursos de pianos</h5>
                <p class="card-text">Aqui nós temos cursos do básico ao avançado com o Piano, contendo vídeo aulas e aulas ao vivo para o usuário. E para todas as idades desdos 6 anos de idade até a idade do Fabio.</p>
                <a href="#" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        </div>
    </div>

</body>
</html>