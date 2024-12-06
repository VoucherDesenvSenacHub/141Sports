<?php

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

public function __construct( $idProduto,$nomeCamisa, $idFornecedor, $categoriaCamisa, $temporada,$valor,$tamanhoDisponivel,$img) {
  
    $this->idProduto = $idProduto;
    $this->nomeCamisa = $nomeCamisa;
    $this->idForncedor = $idFornecedor;
    $this->categoriaCamisa = $categoriaCamisa;
    $this->temporada = $temporada;
    $this->valor = $valor;
    $this->tamanhoDisponivel = $tamanhoDisponivel;
    $this->img = $img;
   
}


public function cadastrar() {
    $query "INSERT INTO produto (idproduto, nomeCamisa, idFornecedor, categoriaCamisa, temporada, valor) VALUES ('" . $this->idProduto . "', '" . $this->nomeCamisa . "',
     '" . $this->idForncedor . "', '" . $this->categoriaCamisa . "', '" . $this->temporada . "', '" . $this->valor . "','" . $this->tamanhoDisponivel . "','" . $this->img . "');";

    $resultado = $this->conexao->query($query);
    return $resultado;
}
public function delete(){
    $query = "DELETE FROM {$this->tabela} WHERE id = {$this->idProduto};";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

public function atualizar($nome_mudado){
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE nome = '{$this->nomeCamisa}';";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

public function mostra($idProduto){
    $query "SELECT * FROM {$this->tabela} WHERE id = {$this->idProduto}; ";

    $resultado = $this->conexao->query($query);
    return $resultado;
}