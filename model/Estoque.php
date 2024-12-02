<?php

require 'Produto.php';

class Estoque {
    public $idEstoque;
    public $qtdDisponivel;
    public $idProduto;

    public function getEstoque(){
        return $this->qtdDisponivel;
    }

    public function cadastrar() {
        $query "INSERT INTO produto (idEstoque, nomeCamisa, idFornecedor, categoriaCamisa, temporada, valor) VALUES ('" . $this->idEstoque . "', '" . $this->nomeCamisa . "',
         '" . $this->idForncedor . "', '" . $this->categoriaCamisa . "', '" . $this->temporada . "', '" . $this->valor . "','" . $this->tamanhoDisponivel . "','" . $this->img . "');";
    
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id = {$this->idEstoque};";
    
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    
    public function atualizar($nome_mudado){
        $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE nome = '{$this->nomeCamisa}';";
    
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
    
    public function mostra($idEstoque){
        $query "SELECT * FROM {$this->tabela} WHERE id = {$this->idEstoque}; ";
    
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}

