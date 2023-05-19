<?php include "partials/header.php"; 
if($_GET['id']){

  $id = $_GET['id'];
  $resultado_usuarios = mysqli_query($conectar,"SELECT * FROM candidatos c LEFT JOIN locais l ON c.cand_loc_id = l.loc_id WHERE c.cand_id = $id");
  $retultado_usuario =  mysqli_fetch_assoc($resultado_usuarios);
}else{
  header("location: ../pages/candidatos.php");
}
  ?>
<div class="content-all-right-in-usuarios-view">
  <div class="content-all-right-in-usuarios-view-title">
    <h1>Candidato - <?php echo $retultado_usuario['cand_nome']; ?></h1>
  </div>
  <div class="content-all-right-in-usuarios-view-infos">
    <div class="content-all-right-in-usuarios-view-infos-left">
      <img src="../img/perfil.png" alt="Imagem de Perfil do candidato">
    </div>
    <div class="content-all-right-in-usuarios-view-infos-right">
      <div class="content-all-right-in-usuarios-view-infos-right-title">
        <h2>Dados Pessoais</h2>
      </div>
      <div class="content-all-right-in-usuarios-view-infos-right-info">
        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Nome:</label>
          <p><?php echo $retultado_usuario['cand_nome']; ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Data de Nascimento:</label>
          <p><?php echo date('d/m/Y', strtotime($retultado_usuario['cand_nascimento'])); ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Endereco:</label>
          <p><?php echo $retultado_usuario['cand_endereco']; ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Telefone:</label>
          <p><?php echo $retultado_usuario['cand_fone']; ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Nome do Pai:</label>
          <p><?php echo $retultado_usuario['cand_pai']; ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Nome do Mãe:</label>
          <p><?php echo $retultado_usuario['cand_mae']; ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Tipo Doc. Intetificação:</label>
          <p><?php echo convert_tipo_documento($retultado_usuario['cand_tipo_doc_ident']); ?></p>
        </div>

        <div class="content-all-right-in-usuarios-view-infos-right-info-item">
          <label>Doc. Intetificação:</label>
          <p><?php echo $retultado_usuario['cand_doc_identificacao']; ?></p>
        </div>

      </div>
    </div>
  </div>
  <div class="content-all-right-in-usuarios-view-infos">
    <div class="content-all-right-in-usuarios-view-infos-right-title">
      <h2>Dados Inscrição</h2>
    </div>
    <div class="content-all-right-in-usuarios-view-infos-right-info">
      <div class="content-all-right-in-usuarios-view-infos-right-info-item">
        <label>Data da Inscrição:</label>
        <p><?php echo date('d/m/Y', strtotime($retultado_usuario['cand_dt_inscricao'])); ?></p>
      </div>
      <div class="content-all-right-in-usuarios-view-infos-right-info-item">
        <label>Endereço:</label>
        <p><?php echo $retultado_usuario['loc_endereco']; ?></p>
      </div>
      <div class="content-all-right-in-usuarios-view-infos-right-info-item">
        <label>Local:</label>
        <p><?php echo $retultado_usuario['loc_descricao']; ?></p>
      </div>
      <div class="content-all-right-in-usuarios-view-infos-right-info-item">
        <label>Sala:</label>
        <p><?php echo $retultado_usuario['loc_salas']; ?></p>
      </div>
    </div>
  </div>
  <?php include "partials/footer.php"; ?>