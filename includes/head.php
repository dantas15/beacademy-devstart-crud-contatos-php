<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links"
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-links">
            <div class="navbar-nav">
                <a class="nav-link <?= $url == '/' ? 'active' : '' ?>" aria-current="page" href="#">Home</a>
                <a class="nav-link <?= $url == '/login' ? 'active' : '' ?>" href="/login">Login</a>
                <a class="nav-link <?= $url == '/cadastro' ? 'active' : '' ?>" href="/cadastro">Cadastro</a>
                <a class="nav-link <?= $url == '/listar' ? 'active' : '' ?>" href="/listar">Listar</a>
                <a class="nav-link <?= $url == '/admin' ? 'active' : '' ?>" href="/admin">Admin</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-sm mt-5">