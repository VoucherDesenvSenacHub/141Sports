<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./templates/icones/headerlogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>141 SPORTS</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Red+Rose:wght@300..700&display=swap');

        * {
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        header #nav-header .nav-list li a {
            color: #fff;
        }

        header {
            display: flex;
            justify-content: space-around;
            justify-content: space-between;
            background-color: rgb(0, 0, 0);
            background-image: linear-gradient(to bottom, #000000, #006414);
            height: 100px;
            align-items: center;
        }

        #nav-header {
            height: 18px;
        }

        .logo {
            padding-left: 20px;
            padding-top: 20px;
        }

        .perfil {
            filter: invert(100%);
            padding-right: 20px;
        }

        .nav-list {
            display: flex;
            align-items: center;
        }

        .nav-list li {
            letter-spacing: 3px;
            margin-left: 32px;
        }
    </style>

</head>

<body>
    <header>

        <div class="logo">
            <a class="a-header" href="#">
                <img src="../icones/headerlogo.png" alt="logo" width="90px" height="90px">
            </a>
        </div>

        <nav id="nav-header">
            <ul class="nav-list">
                <li><a href="../contato/contato.php">Inicio</a></li>
                <li><a href="../brasileirao/brasileirao.php">Brasileirão</a></li>
                <li><a href="../selecao/selecao.php">Seleções</a></li>
                <li><a href="../favoritos/favoritos.php">Favoritos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Sobre Nós</a></li>
            </ul>
        </nav>
        <div class="perfil">
            <a href="#">
                <img src="../icones/headerperfil.png" alt="perfil" width="50px" height="50px">
            </a>
        </div>
    </header>
</body>

</html>