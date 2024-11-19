<?php

    namespace PHP\Modelo;

    

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Document</title>
</head>
<body style="background-color:#6969">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Inicial.php">Loja Instrumental</a>
        </div>
    </nav>

    <form>
    <div class="mb-3">
        <label for="codigo" class="form-label">Informe o seu Codigo</label>
        <input type="codigo" class="form-control" id="codigo" aria-describedby="codigo">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Informe o seu Nome</label>
        <input type="nome" class="form-control" id="nome">
    </div>
    <div class="mb-3">
        <label for="endereci" class="form-label">Informe o seu Endereço</label>
        <input type="endereco" class="form-control" id="endereco" aria-describedby="endereco">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Informe o seu Telefone</label>
        <input type="telefone" class="form-control" id="telefone" aria-describedby="telefone">
    </div>
    
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você foi cadastrado com sucesso em nosso site!
            </div>
            </div>
        </div>
        </div>
    </form>

</body>
</html>
 