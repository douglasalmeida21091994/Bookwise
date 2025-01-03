<?php

// pega os dados
require 'dados.php';

$id = $_REQUEST['id'];

// $filtrado = array_filter($livros, function ($l) use ($id) {

//     return $l['id'] == $id;
    
// });

$filtrado = array_filter($livros, fn ($l) => $l['id'] == $id);

$livro = array_pop($filtrado);

view('livro', compact('livro'));

