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
    public $senha;
    public $table = 'funcionario';
   


public function __construct( $cpf,$nome, $email, $nivelAcesso, $setor,$senha) {
  
    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->email = $email;
    $this->nivelAcesso = $nivelAcesso;
    $this->setor = $setor;
    $this->senha = $senha;
   
}
#-------------------------  tirar o metodo cadastrar e deletar do funcionario ----------

public function cadastrar() {
    $query "INSERT INTO funcionrio (cpf, nome, email, nivelAcesso, setor, senha) VALUES ('" . $this->cpf . "', '" . $this->nome . "',
     '" . $this->email . "', '" . $this->nivelAcesso . "', '" . $this->setor . "', '" . $this->senha . "');";

    $resultado = $this->conexao->query($query);
    return $resultado;
}
public function deletar(){
    $query = "DELETE FROM {$this->tabela} WHERE id = {$this->cpf};";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

#-----------------------------------_____________-------------------------------------------


# confir depois  arrumar o atualizar e mostrar 

public function atualizar($nome_mudado){
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE nome = '{$this->nome}';";
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE cpf = '{$this->cpf}';";
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE email = '{$this->email}';";
    $query = "UPDATE {$this->tabela} SET nome = '{$nome_mudado}' WHERE senha = '{$this->senha}';";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

public function mostrar($cpf){
    $query "SELECT * FROM {$this->tabela} WHERE id = {$this->cpf}; ";

    $resultado = $this->conexao->query($query);
    return $resultado;
}

}