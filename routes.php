<?php


function home()
{
    include __DIR__ . '/pages/home.php';
}

function login()
{
    include __DIR__ . '/pages/login.php';
}

function cadastro()
{
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv', 'a+');

        fwrite($arquivo, "{$nome};{$email};{$telefone}" . PHP_EOL);

        fclose($arquivo);

        echo '<div class="alert alert-success" role="alert"> Cadastro do contato ' . $nome . ' realizado com sucesso!</div>';
    }

    include __DIR__ . '/pages/cadastro.php';
}

function listar()
{
    $contatos = file('dados/contatos.csv');

    include __DIR__ . '/pages/listar.php';
}

function admin()
{
    include __DIR__ . '/pages/admin.php';
}

function notfound()
{
    include __DIR__ . '/pages/404.php';
}