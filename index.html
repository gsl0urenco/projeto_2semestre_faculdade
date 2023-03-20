<?php
include('conection.php');

if (isset($_POST['email']) || isset($_POST['senha'])){

    if (strlen($_POST['email']) == 0){
        //echo "Preencha o seu e-mail!";
    }else if(strlen($_POST['senha']) == 0){
        //echo "Preencha a sua senha!";
    }else {
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //select database visitantes and table dados
        $sql_code = "SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código em SQL: ' . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['codigo'] = $usuario['codigo'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['sobrenome'] = $usuario['sobrenome'];

            header("Location: principal.php");

        }else {
            echo "<h4 style= 'margin: 0 auto; padding: 15px; text-align: center; color: #fff; background: #d32000; width: 400px; height: 20px;'>Falha ao logar! E-mail ou senha Incorretos<h4>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - Karina</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/LOGO-KARINA.png">
    <script>
         
        function Verificar()
        {
            var email, senha;
            document.form1.email.style.background = "#FFF";
            document.form1.senha.style.background = "#FFF";
            
            email = document.form1.email.value;
            if (email.indexOf("@") < 0)
            {
                alert("Preencha o campo email corretamente! Lembrando que o endereço e-mail é regido por '@' e '.'");
                document.form1.email.style.background = "#d32000";
                document.form1.email.focus();
                return false;
            }

            email = document.form1.email.value;
            if (email.indexOf(".") < 0)
            {
                alert("Preencha o campo email corretamente! Lembrando que o endereço e-mail é regido por '@' e '.'");
                document.form1.email.style.background = "#d32000";
                document.form1.email.focus();
                return false;
            }

            email = document.form1.email.value;
            if (email.length == 0)
            {
                alert("Preencha o campo email corretamente");
                document.form1.email.style.background = "#d32000";
                document.form1.email.focus();
                return false;
            }

            senha = document.form1.senha.value;
            if (senha.length == 0)
            {
                alert("Preencha o campo senha corretamente");
                document.form1.senha.style.background = "#d32000";
                document.form1.senha.focus();
                return false;
            }

            document.form1.submit();
        }
            
    </script>
</head>

<body>
    <div id="principal">
        <div id="login">
            <img class="logo" src="imagens/LOGO-KARINA.png" alt="logo">
            <div class="campo">
                <form action="" name="form1" method="post">
                    <label id="userLabel">E-mail</label>
                    <input id="usuario" class="email" type="text" name="email" placeholder="Digite o seu e-mail ..."> 
                    <label id="senhaLabel">Senha</label>
                    <input id="senha" class="senha" type="password" name="senha" placeholder="Digite a sua senha ...">
                    <input class="botao" type="button" value="Login" onclick="Verificar()">
                </form>
                <div class="campo2">
                    <a class="campo2" href="">Esqueceu a senha </a>
                    <a class="campo2" href="cadastro.html">Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
