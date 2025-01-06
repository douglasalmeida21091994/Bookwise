<?php

$livros = (new DB)->livros();

view('index', compact('livros')); // usei esse pois o nome é igual ao nome da variável

// ['livros' => $livros]
