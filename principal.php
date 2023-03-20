<?php
include('protect.php');
include('conection.php');

$sql = "SELECT * FROM funcionarios ORDER BY codigo DESC";
$result = $mysqli->query($sql);

?>

<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar - Visita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/LOGO-KARINA.png">
</head>

<body >
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
            <div class="foto-perfil-usuario">
                <label class="picture" for="input-perfil" tabindex="0">
                    <span class="imagem-perfil">Imagem</span>
                </label>

                <input type="file" accept="image" id="input-perfil">
            </div>
        
        </div>

        <div id="sub-cabecalho">
            <p>Karina Plásticos LTDA - CNPJ: 51.254.159/0001-73</p>
        </div>

        <div id="conteudo">
            <div class="titulo">
                <h3>Visitados</h3>
            </div>
            <div class="barra-pesquisa">
                <form action="" method="get">
                    <input type="text" placeholder="Pesquisar..." id="pesquisa">
                    <button class="buscar" style="width: 70px; height: 25px;" >Buscar</button>
                </form>
            </div>
    
            <div id="user">
                <div class="visitados"> 
                     
                    <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<div class='visitados'>";
                        echo "<hr>";
                        echo "<div class='perfil'>";
                        echo "<img class='foto-perfil' src='imagens/perfil_semfoto.jpeg' width='130px' height='95px'>";
                        echo "<div class='info'>";
                        echo "<h3>" .$user_data['nome'] . " ",  $user_data['sobrenome'] ."</h3>";
                        echo "<h3>" .$user_data['setor'] . "</h3>";
                        echo "<h3 id='telefone'>" .$user_data['telefone'] ."</h3>";
                        echo "<h4>" .$user_data['turno'] ."</h4>";
                        echo "<button class='button'><a style='text-decoration: none;' href='agendar.php'>Agendar</a></button>";
                        echo "</div>";
                        echo "</div>";
                        
            
                    }
                    
                    ?>

                </div>
            </div>
        </div>

        <footer>
            <h3>Direitos Reservados</h3> <br>
            &copy; Copyright 2022

        </footer>
    </div>
    
</body>
</html>