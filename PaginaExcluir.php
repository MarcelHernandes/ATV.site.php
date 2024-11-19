<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Página Excluir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</head>
<body style="background-image:url('imagens/Orgao-Catedral.jpg'); background-repeat: no-repeat; background-size: 100%;">

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
    <br><br>

    <form method="POST">
    <label>Código: </label>
    <input type="number" name="codigo" id="codigo"/><br><br>

    <button type="submit">Excluir
        <?php
            

            if(isset($_POST['codigo'])){
                $conexao = new Conexao();
                $codigo = $_POST['codigo'];
                $excluir = new Excluir();
            }else{
                $conexao = new Conexao();
                $codigo = 0;
                $excluir = "";
            }
            
        ?>
    </button>
    <?php
        $excluir  = new Excluir();
        $excluir->excluirPessoa($conexao,$codigo);
    ?>
    </form>
    <br><br>
    <a href="Inicial.php"><button>Voltar</button></a>
</body>
</html>