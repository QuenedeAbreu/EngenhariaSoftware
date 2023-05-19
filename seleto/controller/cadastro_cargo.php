<?php
include "../scripts/db.inc";
if(!isset($_SESSION)){
  session_start();
}  

global $conectar;
$car_descricao = $_POST['car_descricao'];
$car_escolaridade = $_POST['car_escolaridade'];
$car_nivel = $_POST['car_nivel'];
$car_vagas = $_POST['car_vagas'];

$id_cargo = mysqli_query($conectar,"SELECT MAX(car_id) AS id  FROM cargos");
$max_id_cargo = mysqli_fetch_assoc($id_cargo);
$max_id_cargo = $max_id_cargo['id'] + 1;
$cadastro_cargo = mysqli_query($conectar,"INSERT INTO cargos (car_id,
                                                              car_descricao,
                                                              car_escolaridade,
                                                              car_nivel,
                                                              car_vagas)
                                                  VALUES ($max_id_cargo,
                                                          '$car_descricao',
                                                          '$car_escolaridade',
                                                          '$car_nivel',
                                                          $car_vagas)");

if($cadastro_cargo){
  $_SESSION["cadastro_cargo_sucesso"] = "Cadastro realizado com sucesso!";
  header("location: ../pages/cargos.php");
}else{
  
  $_SESSION["cadastro_cargos_erro"] ="Erro ao cadastrar!";
  header("location: ../pages/cargos.php");
}

?>