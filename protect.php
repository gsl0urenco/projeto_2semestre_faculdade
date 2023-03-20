<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['codigo'])){
    die("<h3 style= 'margin: 0 auto; padding: 30px; text-align: center; color: #fff; background: #d32000; width: 400px;'>Você precisa estar Logado para acessar esta página!<p><a style= 'color: white; text-decoration: none; background: #4682B4; padding: 8px;'  href=\"index.php\">Logar</a></p><h3>");
}
?>
