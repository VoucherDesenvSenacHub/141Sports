<?php
require_once "../config/database.php"

class Usuario {
    
    public $nome;
    public $cpf;
    public $email;
    public $dataNasc;
    public $telefone;
    public $genero;
    public $senha;

    private $tabela = 'cliente';
    private $conexao;

    public function __construct($bd) {
        $this->conexao = $bd;
    }

    public function getIdUsuario($id){
        $stmt = $this->conexao->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela} (nome, cpf, email, dataNasc, telefone, genero, senha) VALUES(:nome, :cpf, :email, :dataNasc, :telefone, :genero, :senha)";  
        
        $stms = $this->conexao->prepare($query);

        $stms->bindParam(":nome", $this->nome);
        $stms->bindParam(":cpf", $this->cpf);
        $stms->bindParam(":email", $this->email);
        $stms->bindParam(":dataNasc", $this->dataNasc);
        $stms->bindParam(":telefone", $this->telefone);
        $stms->bindParam(":genero", $this->genero);
        $stms->bindParam(":senha", $this->senha);

        return $stms->execute();
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela};";  
        return $this->conexao->query($query);      
    }

    public function update(){
            $query = "UPDATE {$this->tabela} 
                      SET :nome, :cpf, :email, :dataNasc, :telefone, :genero, :senha, 
                      WHERE id = :id";
        
            $stmt = $this->conexao->prepare($query);
        
      
            $stms->bindParam(":nome", $this->nome);
            $stms->bindParam(":cpf", $this->cpf);
            $stms->bindParam(":email", $this->email);
            $stms->bindParam(":dataNasc", $this->dataNasc);
            $stms->bindParam(":telefone", $this->telefone);
            $stms->bindParam(":genero", $this->genero);
            $stms->bindParam(":senha", $this->senha);

            return $stmt->execute();
        }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id = :id";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

        return $stmt->execute();
    }


    public function lerFavoritos(){}    
}