<?php

class DB {

    // retorna todos os livros do databse
    public function livros($id = null) {
        $db = new PDO('sqlite:database.sqlite');

        $sql = "SELECT * FROM livros";

        if (!is_null($id)) {

            $sql .= " where id = " . $id;
        }

        $query = $db->query($sql);

        $items = $query->fetchAll(PDO::FETCH_ASSOC);

        $retorno = [];

        foreach($items as $item) {

            $livro = new Livro;

            $livro->id = $item['id'];
            $livro->titulo = $item['titulo'];
            $livro->autor = $item['autor'];
            $livro->descricao = $item['descricao'];           

            $retorno [] = $livro;
            
        }     

        return $retorno;
    }
    
}

