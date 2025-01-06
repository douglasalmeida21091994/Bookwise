<?php

require "functions.php";

class Celular {

    // Aqui são as características
    public $tamanho;
    public $cor;

    // ações
    public function ligar() {
        echo "Estou ligando do celular {$this->tamanho}"; // poderia ser sem chaves tbm
    }

}


$celular1 = new Celular;
$celular1->cor = "Azul";
$celular1->tamanho = "Grande";

$celular1->ligar();

$celular2 = new Celular;
$celular2->cor = "Preta";
$celular2->tamanho = "Pequeno";

dd ($celular1, $celular2);