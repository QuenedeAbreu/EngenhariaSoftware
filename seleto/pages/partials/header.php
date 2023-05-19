<?php
  include "../scripts/configura.php";
  include "../scripts/funcoes.inc";
  include "../scripts/db.inc";
  verificar_sessao();
  if(!isset($_SESSION)){
		session_start();
	} 
  $id = $_SESSION['id'];
  $resultado = mysqli_query($conectar,"SELECT u.usu_id,
                                              u.usu_nome,
                                              u.usu_login,
                                              u.usu_perfil,
                                              u.usu_acesso,
                                              u.usu_status
                                      FROM usuarios u
                                      WHERE u.usu_id = '$id'");
$linha = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleto - Sistemas de Concursos</title>
  <link rel="stylesheet" href="../css/style-pages.css">
  <script src="https://kit.fontawesome.com/242219a14f.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-all">

    <div class="top-bar">
      <div class="top-bar-left">
        <img src="../img/logo.png" />
      </div>
      <div class="top-bar-right">

        <div class="top-bar-right-img">
          <img src="../img/perfil.png" />
        </div>
        <div class="top-bar-right-info">
          <h3><?php echo ($linha['usu_nome']); ?></h3>
          <p><?php echo(convert_perfil($linha['usu_perfil']))?></p>
          <a href="../scripts/logout.php">Sair</a>
        </div>

      </div>
    </div>

    <div class="sub-top-bar">
      <div class="sub-top-bar-left">
        <h2>Bem vindo ao Seleto - <?php echo ($linha['usu_nome']); ?></h2>
      </div>
      <div class="sub-top-bar-right">
      </div>
    </div>
    <!-- Final do topo -->
    <div class="content-all">
      <div class="content-all-left">
        <div class="title-section-nav">
          <p>Acesso rápido</p>
        </div>

        <ul>
          <li><a href="seleto.php"><i class="fa-solid fa-house icon-nav"></i>Home</a></li>
          <li><a href="candidatos.php"><i class="fa-solid fa-user-pen icon-nav"></i></i>Candidatos</a></li>
          <li><a href="cargos.php"><i class="fa-solid fa-chair icon-nav"></i>Cargos</a></li>
          <li><a href="Locais.php"><i class="fa-solid fa-map-location-dot icon-nav"></i></i>Locais</a></li>
          <?php if(verificar_nivel_acesso_conteudo() == true){ ?>
          <div class="title-section-nav">
            <p>Administração</p>
          </div>
          <li><a href="usuarios.php"><i class="fa-solid fa-users icon-nav"></i></i>Usuários</a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="content-all-right">