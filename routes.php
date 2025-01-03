<?php

// controlador padrão
$controller = 'index';


if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

$uri = str_replace('/', '', parse_url($_SERVER['REQUEST_URI']));


if(!file_exists("controllers/{$controller}.controller.php")) {

    http_response_code(404);
    echo "A página não existe!";
    die();
}

// require "controllers/{$controller}.controller.php";

