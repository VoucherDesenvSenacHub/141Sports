<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        #footer {
            background-color: #000000;
            display: flex;
            justify-content: space-between;
        }

        .parceiros-footer {
            font-size: 20px;
            color: #fff
        }

        .mid-footer .email-footer .link-footer p {
            color: #fff;
        }

        .mid-footer .zap-footer .link-footer {
            color: #fff;
        }

        .direitos-footer {
            color: #fff;
        }

        .left-side-footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: fit-content;
            height: fit-content;
            margin-top: auto;
            margin-bottom: auto;

        }

        .mid-footer {
            display: flex;
            flex-direction: column;
            width: fit-content;
            height: fit-content;
            margin-top: auto;
            margin-bottom: auto;
        }

        .email-footer {
            display: flex;
        }

        .zap-footer {
            display: flex;
        }

        .right-side-footer {
            height: fit-content;
            width: fit-content;
        }

        .link-footer {
            display: flex;
            align-items: center;
        }
    </style>

</head>

<body>
    <footer id="footer">

        <section class="left-side-footer">

            <div class="parceiros-footer">
                Parceiros
            </div>

            <div class="patrocinadores-footer">
                <img src="../icones/parceiros.png" alt="">
            </div>

            <div class="direitos-footer">
                <p>WWW.141SPORTS.COM.BR ©️ 2024TODOS DIREITOS RESERVADOS</p>
            </div>

        </section>

        <section class="mid-footer">

            <div class="email-footer">
                <a  class="link-footer" href="#">
                    <img src="../icones/email1.png" width="31px" height="31px" alt="email">
                    <p>CONTATO@141SPORTS.COM.BR</p>
                </a>
            </div>

            <div class="zap-footer">
                <a  class="link-footer" href="#">
                    <img src="../icones/whatsapp.png" width="31px" height="31px" alt="whatsapp">
                    <p>+556799999-9999</p>
                </a>
            </div>

        </section>

        <section class="right-side-footer">
            <img src="../icones/LogoHub.png" width="237" height="162" alt="senac">
        </section>

    </footer>
</body>

</html>