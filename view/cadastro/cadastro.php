<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <section id="area-cadastro">
    
        <h1 id="titulo-cadastro">Cadastro</h1>

        <form action="" id="formulario-cadastro" method="POST">

            <div class="row-75">
                <div>
                    <label for="nome">Nome *</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                
                <div>
                    <label for="cpf">CPF *</label>
                    <input type="number" id="cpf" name="cpf" required>

                </div>
            </div>

            <div class="row-75">
                <div>
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <label for="dtNasc">Data de Nasc</label>
                    <input type="date" id="dtNasc" name="dtNasc">
                </div>
            </div>

            <div class="row-75">
                <div>
                    <label for="telefone">Telefone/Celular</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>

                <div>
                    <label for="genero">Gênero</label>
                    <select name="genero" id="genero">
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
            </div>

            <div class="row-50">
                <div>
                    <label for="senha">Senha *</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                
                <div>
                    <label for="senha">Digite a Senha Novamente *</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
            </div>

            <div class="row-misto">
                <div>
                    <label for="cep">CEP *</label>
                    <input type="number" id="cep" name="cep" required>
                </div>
           
                <div>
                    <label for="estado">Estado *</label>
                    <select name="estado" id="estado">
                        <option value="Todos">Todos</option>
                    </select>
                </div>

                <div>
                    <label for="cidade">Cidade *</label>
                    <input type="text" id="cidade" name="cidade" required>
                </div>
            </div>

            <div class="row-misto2">
                <div>
                    <label for="rua">Rua *</label>
                    <input type="text" id="rua" name="rua" required>
                </div>

                <div>
                    <label for="bairro">Bairro *</label>
                    <input type="text" id="bairro" name="bairro" required>
                </div>
            
                <div>
                    <label for="numero-casa">Nº *</label>
                    <input type="number" id="numero-casa" name="numero-casa" required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento">
                </div>
            </div>
            
            <div class="btn-cadastrar">
                <input type="submit" name="btn-cadastrar" value="CADASTRAR" id="cadastrar">
            </div>

            <p class="fazer-login">Já possui login? <a href="#">Faça login</a></p>


        </form>

    </section>
    
</body>
</html>