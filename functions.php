<?php

function view($view, $data = []) {

    // $variavel = "livros";

    // $$variavel = [];

    // dd($livros);

    foreach ($data as $key => $value) {

        $$key = $value;


    }

    require 'views/templates/app.php';

}

// apenas um var_dump com pre
function dd(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

function abort($code) {

    http_response_code($code);   

    view($code);

    // require "views/$code.php";

    die();
}