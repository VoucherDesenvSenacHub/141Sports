<?php

require 'Usuario.php';
class Funcionario extends Usuario {
    public $adminVerificacao = False;  
    //não tenho certeza se isso funciona
    //falta os metodos de funcionarios que ainda precisa ver quais são
}


class Funcionario {
    
    public $cpf;
    public $nome;
    public $email;
    public $nivelAcesso;
    public $setor;
    public $senha
    public $table = 'funcionario';
   
}

public function __construct( $cpf,$nome, $email, $nivelAcesso, $setor,$senha) {
  
    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->email = $email;
    $this->nivelAcesso = $nivelAcesso;
    $this->setor = $setor;
    $this->senha = $senha;
   
}

public function cadastrar() {
    $query "INSERT INTO funcionrio (cpf, nome, email, nivelAcesso, setor, senha) VALUES ('" . $this->cpf . "', '" . $this->nome . "',
     '" . $this->email . "', '" . $this->nivelAcesso . "', '" . $this->setor . "', '" . $this->senha . "');";

    $resultado = $this->conexao->query($query);
    return $resultado;
}
public function delete(){
    $query = "DELETE FROM {$this->tabela} WHERE id = {$this->cpf};";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

public function atualizar($nome_mudado){
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE nome = '{$this->nome}';";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

public function mostra($cpf){
    $query "SELECT * FROM {$this->tabela} WHERE id = {$this->cpf}; ";

    $resultado = $this->conexao->query($query);
    return $resultado;
}