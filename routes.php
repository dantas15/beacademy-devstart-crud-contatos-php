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

        $message = 'Cadastro do contato ' . $nome . ' realizado com sucesso!';
        include __DIR__ . '/includes/message.php';
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

function excluir()
{
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');

    unset($contatos[$id]);

    unlink('dados/contatos.csv');

    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach ($contatos as $contato) {
        fwrite($arquivo, $contato);
    }

    $message = 'Contato excluído com sucesso!';
    include __DIR__ . '/includes/message.php';
}

function editar()
{
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');

    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}" . PHP_EOL;

        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');

        foreach ($contatos as $contato) {
            fwrite($arquivo, $contato);
        }

        fclose($arquivo);

        $message = 'Contato editado com sucesso!';
        include __DIR__ . '/includes/message.php';
    }

    $dados = $contatos[$id];

    $contato = explode(';', $dados);

    include __DIR__ . '/pages/editar.php';
}

function notfound()
{
    include __DIR__ . '/pages/404.php';
}