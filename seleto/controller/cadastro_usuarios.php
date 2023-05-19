<?php
include "../scripts/db.inc";
if(!isset($_SESSION)){
  session_start();
}  

global $conectar;
$usu_nome = $_POST['usu_nome'];
$usu_login = $_POST['usu_login'];
$usu_codigo = sha1($_POST['usu_codigo']);
$usu_perfil = $_POST['usu_perfil'];

$resultado_one_usuarios = mysqli_query($conectar,"SELECT * FROM usuarios u where u.usu_login = '$usu_login'");
if(mysqli_num_rows($resultado_one_usuarios) == 0){
  $id_usuario = mysqli_query($conectar,"SELECT MAX(usu_id) AS id  FROM usuarios");
  $max_id_usuario = mysqli_fetch_assoc($id_usuario);
  $max_id_usuario = $max_id_usuario['id'] + 1;

  $resultado_usuarios = mysqli_query($conectar,"INSERT INTO usuarios (usu_id,
                                                                          usu_nome,
                                                                          usu_login,
                                                                          usu_codigo,
                                                                          usu_perfil,
                                                                          usu_acesso,
                                                                          usu_status) 
                                                                          VALUES (
                                                                            $max_id_usuario,
                                                                            '$usu_nome',
                                                                            '$usu_login',
                                                                            '$usu_codigo',
                                                                            $usu_perfil,
                                                                            now(),
                                                                            1)");

if($resultado_usuarios){
  $_SESSION["cadastro_usuarios_sucesso"] = "Cadastro realizado com sucesso!";
  header("location: ../pages/usuarios.php");
}else{
  $_SESSION["cadastro_usuarios_erro"] = "Erro ao cadastrar!";
  header("location: ../pages/usuarios.php");
}

}else{
  $_SESSION["cadastro_usuarios_erro"] = "Usuário já existe!";
  header("location: ../pages/usuarios.php");
}


?>