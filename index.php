<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include __DIR__ . '/includes/head.php';

include 'routes.php';

match ($url[0]) {
    '/' => home(),
    '/cadastro' => cadastro(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    '/login' => login(),
    '/listar' => listar(),
    '/admin' => admin(),
    default => notfound()
};

include __DIR__ . '/includes/foot.php';

