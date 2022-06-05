<?php

$url = $_SERVER['REQUEST_URI'];

include __DIR__ . '/includes/head.php';

include 'routes.php';

match ($url) {
    '/' => home(),
    '/cadastro' => cadastro(),
    '/login' => login(),
    '/listar' => listar(),
    '/admin' => admin(),
    default => notfound()
};

include __DIR__ . '/includes/foot.php';

