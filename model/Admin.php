<?php
include 'Funcionario.php';
class Admin extends Funcionario {
    public $adminVerificacao = True;



    public function cadastrarProduto(){
        return "INSERT INTO "
    }
    public function cadastrarFuncionario(){}
    public function listarFuncionario(){}
    public function excluirFuncionado(){}
    public function atualizarFuncionario(){}
    public function listarProduto(){}
    public function excluirProduto(){}
    public function listarEstoque(){}
    public function listarProdutoMaisVendido(){}
    public function listarPagamentoNaoConfirmado(){}
    public function listarPedidosEmAberto(){}
    public function listarPedidosCancelados(){}
    public function listarEntregas(){}
}