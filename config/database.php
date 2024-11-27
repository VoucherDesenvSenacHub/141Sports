<?php


class Database{
    const host = 'localhost';
    const banco_de_dados = 'sports141';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco_de_dados);
        if(!$this->conexao){
            echo "<script>alert('erro na conexao')</script>";
        } else{
            return $this->conexao;
        }
    }

    public function fechar() {
        echo "<script>alert('FECHOU')</script>";
        return !$this->conexao;
    }
}