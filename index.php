<?php

echo "SEMPRE VAI CAIR AQUI NO INDEX.PHP";

// controlador padrão
$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

require "controllers/{$controller}.controller.php";