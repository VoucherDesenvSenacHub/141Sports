<?php

require 'Produto.php';

class Estoque {
    public $idEstoque;
    public $qtdDisponivel;
    public $idProduto;

    public function getEstoque(){
        return $this->qtdDisponivel;
    }
}