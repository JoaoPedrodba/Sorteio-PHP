<?php

require_once __DIR__ . '/../app/controllers/JogoController.php';

$rota = $_GET['rota'] ?? 'inicio';

$controller = new JogoController();

if ($rota === 'inicio'){
    $controller-> inicio();
} elseif($rota === 'explorar'){
    $controller ->explorar();
} else{
    echo 'essa rota nao existe';
}