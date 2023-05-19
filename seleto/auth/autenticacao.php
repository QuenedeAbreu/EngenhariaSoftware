<?php
    include "../scripts/db.inc";
    if(!isset($_SESSION)){
      session_start();
    } 
     
    function autentica(){
      global $conectar;
      
      $usuario = $_POST['usuario'];
      $codigo = sha1($_POST['codigo']);
      $resultado = mysqli_query($conectar,"SELECT usu_id,
                                                usu_login,
                                                usu_perfil,
                                                usu_status 
                                FROM usuarios 
                                WHERE usu_login = '$usuario'  
                                AND usu_codigo = '$codigo'");
      $num_linhas = mysqli_num_rows($resultado);
     
      $linha = mysqli_fetch_assoc($resultado);
      if($num_linhas > 0 && $linha["usu_status"] == 1){
        $id_usuario = $linha["usu_id"];
        $_SESSION["id"] = $id_usuario;
        $_SESSION['usu_perfil'] = $linha["usu_perfil"];
        header("location: ../pages/seleto.php");
    }else{
      $_SESSION["erroLogin"] = false;
      header("location: ../index.php");
    }
    mysql_close($conectar);
  }
  autentica();
?>