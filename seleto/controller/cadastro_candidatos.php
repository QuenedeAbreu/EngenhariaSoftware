<?php
include "../scripts/db.inc";
if(!isset($_SESSION)){
  session_start();
}   

global $conectar;
   $cand_inscricao = $_POST['cand_inscricao'];
   $cand_nome = $_POST['cand_nome'];
   $cand_nascimento = date('Y-m-d', strtotime($_POST['cand_nascimento'])); 
   $cand_endereco = $_POST['cand_endereco'];
   $cand_fone = $_POST['cand_fone'];
   $cand_pai = $_POST['cand_pai'];
   $cand_mae = $_POST['cand_mae'];
   $cand_doc_identificacao = $_POST['cand_doc_identificacao'];
   $cand_cargo = $_POST['cand_cargo'];
   $cand_loc_id = $_POST['cand_loc_id'];
   $cand_tipo_identificacao = $_POST['cand_tipo_identificacao'];
   $data_inscricao = date('Y-m-d', strtotime($_POST['data_inscricao'])); 

  $id_usuario = $_SESSION['id'];

   $cand_existe_result = mysqli_query($conectar, "SELECT cand_id FROM candidatos 
   WHERE cand_doc_identificacao='$cand_doc_identificacao'
   OR cand_inscricao='$cand_inscricao'
   OR cand_nome='$cand_nome'
   AND cand_nascimento='$cand_nascimento'");
   $num_linhas = mysqli_num_rows($cand_existe_result);

    if($num_linhas > 0){
      $_SESSION["userExiste"] = 'O usuário já existe!';
      header("location: ../pages/candidatos.php");
    }else{
        // Pegar o maior ID
        $candidatos_id =  mysqli_query($conectar, "SELECT MAX(cand_id) as id FROM candidatos");
        $max_id = mysqli_fetch_assoc($candidatos_id) ;
        $max_id = $max_id['id'] + 1;
        $cadastro_candidatos =  mysqli_query($conectar, "INSERT INTO candidatos (cand_id,
                    cand_inscricao,
                    cand_nome,
                    cand_nascimento,
                    cand_endereco,
                    cand_fone,
                    cand_pai,
                    cand_mae,
                    cand_doc_identificacao,
                    cand_tipo_doc_ident,
                    cand_car_id,
                    cand_loc_id,
                    cand_usu_id,
                    cand_dt_inscricao,
                    cand_dt_sistema
                    ) values(
                      $max_id ,
                        concat('$max_id', '-', LPAD('$cand_inscricao',4,'0'))  ,
                        '$cand_nome',
                        '$cand_nascimento', 
                        '$cand_endereco',
                        '$cand_fone',
                        ' $cand_pai',
                        '$cand_mae',
                        '$cand_doc_identificacao',
                        '$cand_tipo_identificacao',
                        '$cand_cargo',
                        '$cand_loc_id',
                        '$id_usuario',
                        '$data_inscricao',
                        CURDATE()
                    );");

                  if($cadastro_candidatos){
                    $_SESSION["cadastro_candidatos_sucesso"] = "Cadastro realizado com sucesso!";
                    $_SESSION["cand_inscricao"] = $max_id.'-'. str_pad($cand_inscricao , 4 , '0' , STR_PAD_LEFT);
                    header("location: ../pages/candidatos.php");
                  }else{
                    
                    $_SESSION["cadastro_candidatos_erro"] ="Erro ao cadastrar!";
                    header("location: ../pages/candidatos.php");
                  }

      
    }


?>