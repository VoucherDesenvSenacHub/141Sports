# 141-Sports
Repositório do grupo 141 da camisa

--------------------------------------------------------
***** CLASSE -> Usuario ******

Atributos -> 
(
	cpf
	nome
	dataNasc
	email
	telefone
	genero
	senha
			)

Métodos -> 

	cadastrar
	logar
	lerPedidos
	lerFavoritos
	lerComprasConcluidas
	lerCarrinho
	lerRastreio
	contatarSuporte
	
--------------------------------------------------------

***** CLASSE 	-> Funcionario extends Usuario ******

Atributos ->
(
	adminVerificacao - > False
	
					)
--------------------------------------------------------

***** CLASSE -> Admin extends Funcionario ******

Atributos -> ()
Métodos ->
(
	cadastrarProduto				
	cadastrarFuncionario
	listarFuncionario
	atualizarFuncionario
	listarProduto(Query padrão para listar de acordo com oq quer, POST OU GET)
	


			)
--------------------------------------------------------
***** CLASSE -> Fornecedor *****

Atributos ->
(
	nomeFornecedor
	cnpj
	contato
	telefone
	inscricao
			)


--------------------------------------------------------
***** CLASSE -> Produto *****
Atributos -> 

	idProduto
	nomeCamisa
	fornecedor
	categoriaCamisa
	temporada
	valor
	tamanhoDisponivel
	imagem

--------------------------------------------------------
***** CLASSE -> Estoque ****** 
require "Produto.php"

Atributo -> 
(
	idEstoque
	qtd
	idProduto
	
)

Metódo -> getEstoque()

--------------------------------------------------------
***** CLASSE -> Carrinho
require "Produto.php"
require "Usuario.php"

Atributos -> qtdItensCarrinho

Métodos -> 
