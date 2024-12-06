<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contato.css">
    <title>Document</title>
</head>

<body>

    <?php include('../templates/header.php'); ?>

    <div id="tarja-contato">
        <p>Contato</p>
    </div>

    <section id="contato">
        <div id="text-contato">
            <h1>Entre em contato conosco!</h1>
            <p>Para mais informações sobre nossa loja online de camisetas </br> futebol, por favor, entre em contato conosco através dos </br> meios abaixo.</p>
            <h4>Atendimento</h4>

            <div class="align-wppTelefone">
                <div class="img-wpp">
                    <img src="../templates/icones/whatsapp.png" alt="logoWhatsapp">
                </div>
                <p>67 - 99999-9999</p>
            </div>
            <h4>Email</h4>
            <p>contato@empresa.com</p>
        </div>

        <div id="form-contato">
            <form action="" method="POST">

                <label for="nomeContato">Nome:</label>
                <input placeholder="Digite seu nome completo " type="text" name="nomeContato" id="nomeContato">

                <label for="emailContato">Email de contato: </label>
                <input placeholder="Digite seu email" type="email" name="emailContato" id="emailContato">

                <label for="textareaContato">Mensagem para 141sports:</label>
                <input placeholder="Digite a sua mensagem aqui" type="text" name="textareaContato" id="textareaContato">

                <button type="submit">Enviar Mensagem</button>

            </form>
        </div>
    </section>

    <section id="perguntas">

        <h1><i>Perguntas Frequentes</i></h1>
        <div id="caixa-perguntas">

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Qual é o prazo de entrega?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>O prazo de entrega varia de acordo com a localização do cliente e o método de envio escolhido. Em média, as entregas são realizadas entre 10 a 15 dias úteis. Para mais detalhes, consulte nossa página de envio.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Quais são os métodos de pagamentos aceitos?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Aceitamos os seguintes métodos de pagamento: cartões de crédito (Visa, MasterCard, Hipercard, Hiper, Diners Club International, Elo, Amercian Express, Cabal) e PIX.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Como faço para rastrear meu pedido?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Assim que seu pedido for enviado, você receberá um e-mail com um código de rastreamento. Você pode usar este código em nosso site para acompanhar o status da entrega.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Qual é a política de troca e devolução?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Aceitamos trocas e devoluções no prazo de 7 dias após o recebimento do pedido. O produto deve estar em perfeito estado, sem sinais de uso, e com todas as etiquetas originais. Para iniciar uma troca ou devolução, entre em contato com nosso atendimento ao cliente.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Vocês vendem camisetas de todos os times?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Nossa loja oferece uma ampla variedade de camisetas de futebol de times nacionais e internacionais. Se você não encontrar a camiseta desejada, entre em contato conosco e faremos o possível para atendê-lo.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>Como sei qual é o meu tamanho?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Disponibilizamos um guia de tamanhos na página de cada produto. Recomendamos que você consulte este guia e compare suas medidas antes de fazer a compra.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

            <div class="card-pergunta">
                <div class="div-pergunta">
                    <p>As camisetas são originais?</p> <button>▼</button>
                </div>
                <article class="article-card">
                    <p>Sim, todas as nossas camisetas são produtos oficiais e licenciados pelos clubes e fabricantes.</p>
                </article>
            </div>

            <div class="line-pergunta">

            </div>

        </div>
    </section>

    <?php include('../templates/footer.php'); ?>


    <script>
        var itemArticlePergunta = document.querySelectorAll(".article-card");

        itemArticlePergunta.forEach(card => {
            card.querySelector("button").addEventListener("click", function() {
                card.classList.toggle("ativo");
            })
        });
    </script>

</body>

</html>