<?php

$db = new DB();
$livros = $db->livros();

// pega os dados
// require 'dados.php';

view('index', compact('livros')); // usei esse pois o nome é igual ao nome da variável

// ['livros' => $livros]
