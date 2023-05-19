<?php
function convert_cargos($cargo){
	if($cargo == "F"){
		echo "Fundamental";
	}elseif($cargo == "M") {
		echo "Medio";
	}else {
		echo "Superior";
	}
}

function convert_status($status){
	if($status == 0 && $status != ""){
		echo "<div class='content-all-right-in-table-status content-all-right-in-table-status-inativo'><p>Inativo</p></div>";
	}elseif($status == 1){
		echo "<div class='content-all-right-in-table-status content-all-right-in-table-status-ativo'><p>Ativo</p></div>";
	}else{
		echo "<div class='content-all-right-in-table-status content-all-right-in-table-status-ausente'><p>Ausente</p></div>";
	}
}

function convert_tipo_documento($tipo_documento){
	if($tipo_documento == 2){
		echo "RG";
	}elseif($tipo_documento == 3){
		echo "Cart. Habilitação";
	}elseif($tipo_documento == 4){
		echo "Cart. Trabalho";
	}elseif($tipo_documento == 5){
		echo "Cart.Policial (Fed, Mil, Civ)";
	}elseif($tipo_documento == 6){
		echo "Reg. Conselho (CRM , OAB, etc )";
	}else{
		echo "Reg. Forças Armadas";
	}
}
function verificar_sessao(){
	if(!isset($_SESSION) ){
			session_start();	
	} 
	if(!isset($_SESSION["id"])){
		header("location: ../index.php");
	}
}

function verificar_nivel_acesso(){
	if(!isset($_SESSION['usu_perfil']) || $_SESSION['usu_perfil'] != 1){
		header("location: seleto.php");
		}
	}
	function verificar_nivel_acesso_controllers(){
	if(!isset($_SESSION['usu_perfil']) || $_SESSION['usu_perfil'] != 1){
		header("location: ../pages/seleto.php");
		}
	}

function verificar_nivel_acesso_conteudo(){
	if(!isset($_SESSION['usu_perfil']) || $_SESSION['usu_perfil'] != 1){
		return false;
		}else{
			return true;
		}
	}

function convert_perfil($usu_perfil){
	if($usu_perfil == 1){
		return "Administrador";
	}else{
		return "Funcionário";
	}
}

function get_client_ip() {
		$ipaddress = "";
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	};

  function imprime_data() {
	$dia_mes=date('j');
	$mes=date('m');
	$ano=date('Y');
	if($mes==1) { $mes="Janeiro"; }
		elseif($mes==2) { $mes="Fevereiro"; }
		elseif($mes==3) { $mes="Março"; }
		elseif($mes==4) { $mes="Abril"; }
		elseif($mes==5) { $mes="Maio"; }  
		elseif($mes==6) { $mes="Junho"; }
		elseif($mes==7) { $mes="Julho"; }
		elseif($mes==8) { $mes="Agosto"; }
		elseif($mes==9) { $mes="Setembro"; }
		elseif($mes==10) { $mes="Outubro"; }
		elseif($mes==11) { $mes="Novembro"; }
		elseif($mes==12) { $mes="Dezembro"; }
	$data_oficial="Rio Branco/AC," . " $dia_mes de" . " $mes de" . " $ano.";
	echo $data_oficial; 
  };
  
  
?>