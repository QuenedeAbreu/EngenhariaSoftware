<?php 
include "../scripts/db.inc";
include "../scripts/funcoes.inc";
if(!isset($_SESSION)){
  session_start();
}  
verificar_nivel_acesso_controllers();
  global $status_result, $text_result;
$id_usuario = $_GET['id'];

$resultado_one_usuarios = mysqli_query($conectar,"SELECT * FROM usuarios u where u.usu_id = '$id_usuario'");
$linha = mysqli_fetch_assoc($resultado_one_usuarios);
if($linha['usu_status'] == $id_usuario){
  $_SESSION["cadastro_usuarios_erro"] = "Vocé não pode inativar o usuário em que está logado!";
  header("location: ../pages/usuarios.php");
}else{

  if($linha['usu_status'] == 0){
    $status_result = 1;
    $text_result ="Usuário ativado com sucesso!";
  }else{
    $status_result = 0;
    $text_result ="Usuário Inativado com sucesso!";
  }
  
  $resultado_update_status_usuarios = mysqli_query($conectar,"UPDATE usuarios SET usu_status = '$status_result' WHERE usu_id = '$id_usuario'");
  if($resultado_update_status_usuarios){
    $_SESSION["cadastro_usuarios_sucesso"] = $text_result;
    header("location: ../pages/usuarios.php");
  }else{
    $_SESSION["cadastro_usuarios_erro"] = "Erro ao atualizar o usuário!";
    header("location: ../pages/usuarios.php");
  }
}


?>