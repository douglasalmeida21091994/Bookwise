<?php

$id = $_REQUEST['id'];

$db = new DB;

$livro = $db->livros($id)[0];

// dd($livro);

view('livro', compact('livro'));

