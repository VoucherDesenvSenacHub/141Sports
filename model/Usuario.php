<?php

class Usuario {
    
    public $nome;
    public $cpf;
    public $email;
    public $dataNasc;
    public $telefone;
    public $genero;
    public $senha;
    public $endereco;

    public $tabela = 'cliente';

    public function __construct($infoUSuario) {
        $this->endereco = $newEndereco = new Endereco($infoUSuario['endereco']);
    }

    public function cadastrar(){
        $query = "INSERT INTO {$this->tabela}(nome, cpf, email, dataNasc, telefone, genero, senha) VALUES('{$this->nome}', '{$this->cpf}', '{$this->email}', '{$this->dataNasc}', '{$this->telefone}', '{$this->genero}', '{$this->senha}');";

        return $resultado = [
            'cadastroEdereco' => $this->endereco->cadastrar(),
            'cadastroUsuario' => $query
        ];
        //$resultado = $this->conexao->conectar($query);        

    }

    public function mostrar(){
        $query = "SELECT * FROM {$this->tabela};";        
    }

    public function alterar(){
        $query = "SELECT COUNT(*) FROM {$this->tabela} WHERE id = '{$this->id_usuario}';";
    }

    public function deletar(){
        $query = "DELETE FROM {$this->tabela} WHERE id_livro = {$this->id_usuario};";
    }


    public function lerFavoritos(){}    
}