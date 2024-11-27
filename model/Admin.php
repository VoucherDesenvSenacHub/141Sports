<?php
include 'Funcionario.php';
class Admin extends Funcionario {
    public $adminVerificacao = True;

    public function cadastrarProduto(){}
    public function cadastrarFuncionario(){}
    public function listarFuncionario(){}
    public function atualizarFuncionario(){}
    public function listarProduto(){}
}