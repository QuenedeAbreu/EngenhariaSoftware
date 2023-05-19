<?php
include "../scripts/db.inc";
if(!isset($_SESSION)){
  session_start();
}  

global $conectar;
$loc_decricao = $_POST['loc_decricao'];
$loc_salas =  $_POST['loc_salas'];
$loc_endereco =  $_POST['loc_endereco'];

$id_locais = mysqli_query($conectar,"SELECT max(l.loc_id) as id  FROM locais l");
$max_id_locais = mysqli_fetch_assoc($id_locais);
$max_id_locais= $max_id_locais['id'] + 1;
echo $max_id_locais;

$cadastro_locais = mysqli_query($conectar,"INSERT INTO locais (loc_id,
                                                                loc_descricao,
                                                                loc_salas,
                                                                loc_endereco) 
                                                                VALUES ($max_id_locais,
                                                                        '$loc_decricao',
                                                                        $loc_salas,
                                                                        '$loc_endereco')");

if($cadastro_locais){
  $_SESSION["cadastro_locais_sucesso"] = "Cadastro realizado com sucesso!";
  header("location: ../pages/locais.php");
}else{
  
  $_SESSION["cadastro_locais_erro"] ="Erro ao cadastrar!";
  // header("location: ../pages/locais.php");
}                                                                       
?>