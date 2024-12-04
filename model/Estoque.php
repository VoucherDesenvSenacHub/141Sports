<?php

require 'Produto.php';

class Estoque {
    public $idEstoque;
    public $qtdDisponivel;
    public $idProduto;

    public function __construct($con)
    {
        $this->conexao = $bd;
    }
    public function getEstoque($nomeCamisa){
        return $this->qtdDisponivel;
    }
}