<?php 
include "scripts/configura.php";
if(!isset($_SESSION)){
  session_start();
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>SELETO - Autenticação</title>
</head>

<body>
  <div class="content-all">
    <div class="content-in">
      <div class="content-title">
        <img src="img/logo.png" alt="logo">
        <h1>AUTENTICAO NO SISTEMA</h1>
      </div>

      <form method="POST" action="auth/autenticacao.php">
        <div class="content-input">
          <input type="text" name="usuario" size="16" maxlength="10" placeholder="Usuario">
        </div>
        <div class="content-input">
          <input type="password" name="codigo" size="16" maxlength="10" placeholder="Codigo">
        </div>
        <div class="content-input">
          <input type="submit" value="Acessar" name="acessar">
        </div>
      </form>
      <div class="erro-login">
        <?php 
        if( isset($_SESSION["erroLogin"]) && $_SESSION["erroLogin"] == false ){ 
          ?>
        <p>Login ou senha incorretos ou usuario inativo! </p>
        <?php 
       session_destroy();  
      }; ?>
      </div>
    </div>
  </div>
</body>

</html>