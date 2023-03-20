<?php
include('protect.php');
include('conection.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/LOGO-KARINA.png">
</head>

<body>
    <div id="container";>
        <div id="cabecalho">
            <div class="logo-cabecalho">
                <img src="imagens/LOGO-KARINA.png" alt="LOGO-KARINA">
            </div>
            <div class="link-cabecalho">
                <a href="logout.php">Sair</a>
            </div>
            <div class="titulo-cabecalho">
                <h3 class="nome-usuario">Olá Sr(a), <?php echo $_SESSION['nome']?> <?php echo $_SESSION['sobrenome']?></h3>
            </div>
            <div>
                <form action="">
                <input type="file">
                </form>
            </div>
        
        </div>

        <div id="sub-cabecalho">
            <p>Karina Plásticos LTDA - CNPJ: 51.254.159/0001-73</p>
        </div>

        <div class="agendamento">
            <div>
                <h3 class="title-agendamento">Escolha uma data para Agendamento</h3>
            </div>
            <div class="input-agendamento">
                <form action="" name="form-ag">
                <input type="date"> <br>
                <input type="time"> <br> <br>
                <button class="button-agendamento">Agendar</button> 
                <button  class="button-agendamento" id="voltar"><a href="principal.php" class="button-back"> Voltar a Página anterior </a></button>
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