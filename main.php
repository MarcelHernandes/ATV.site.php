<?php

    namespace PHP\Modelo;

    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Endereco.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/ConsultarCodigo.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\Cliente;//Definir a classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\MOdelo\DAO\ConsultarCodigo;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

?>