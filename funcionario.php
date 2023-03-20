<?php
include('protect-funcionario.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário - Karina</title>
    <link rel="shortcut icon" href="imagens/LOGO-KARINA.png">
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <div id="container";>
        <div id="cabecalho">
            <div class="logo-cabecalho">
                <img src="imagens/LOGO-KARINA.png" alt="LOGO-KARINA">
            </div>
            <div class="link-cabecalho">
                <a href="logout-funcionario.php">Sair</a>
            </div>
            <div class="titulo-cabecalho">
                <h3 class="nome-usuario">Olá Sr(a), <?php echo $_SESSION['nome']?> <?php echo $_SESSION['sobrenome']?></h3>
            </div>
        </div>
        <div id="sub-cabecalho">
            <p>Karina Plásticos LTDA - CNPJ: 51.254.159/0001-73</p>
        </div>

        <div id="conteudo">
            <div class="titulo-funcionarios">
                <h3>Solicitações de Agendamentos</h3>
            </div>
            <div class="barra-pesquisa">
                <form action="">
                    <input type="text" placeholder="Pesquisar...">
                </form>
            </div>
        </div>

        <footer>
            <h3>Direitos Reservados</h3> <br>
            &copy; Copyright 2022

        </footer>
    </div>
    
</body>
</html>