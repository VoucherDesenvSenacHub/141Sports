<?php

require_once '/database.php';
echo "Arquivo incluído com sucesso!";

class Produto {

    private $conexao;
    private $table = 'camisa';
    public $idProduto;
    public $nomeCamisa;
    public $idFornecedor;
    public $categoriaCamisa;
    public $temporada;
    public $valor;
    public $tamanhoDisponivel;
    public $img;

}