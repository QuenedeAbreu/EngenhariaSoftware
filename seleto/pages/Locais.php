<?php include "partials/header.php";
$resultado_locais = mysqli_query($conectar,"SELECT * FROM locais");


?>
<div class="content-all-right-in-locais">
  <div class="content-all-right-in-locais-title">
    <h1>Locais</h1>
  </div>

  <?php if(isset($_SESSION["cadastro_locais_sucesso"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-success">
    <p><i class="fa-solid fa-circle-check icon-alert-success"></i> - <?php echo $_SESSION["cadastro_locais_sucesso"]?>
    </p>
  </div>
  <?php }; 
  unset($_SESSION['cadastro_locais_sucesso']);
  ?>
  <?php if(isset($_SESSION["cadastro_locais_erro"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-error">
    <p><i class="fa-solid fa-circle-xmark icon-alert-error"></i> - <?php echo $_SESSION["cadastro_locais_erro"]?></p>
  </div>
  <?php }; 
  unset($_SESSION["cadastro_locais_erro"]);
  ?>

  <div class="content-all-right-in-locais-form">
    <h4>Cadastro de Locais</h4>
    <form action="../controller/cadastro_locais.php" method="POST">
      <div class="content-all-right-in-form-input">
        <label for="loc_decricao">Descrição: </label>
        <input type="text" name="loc_decricao" id="loc_decricao">
      </div>
      <div class="content-all-right-in-form-input">
        <label for="loc_salas">Salas: </label>
        <input type="number" name="loc_salas" id="loc_salas">
      </div>
      <div class="content-all-right-in-form-input">
        <label for="loc_endereco">Endereço: </label>
        <input type="text" name="loc_endereco" id="loc_endereco">
      </div>

      <div class="content-all-right-in-form-input content-all-right-in-form-submit">

        <input type="submit" value="Cadastrar">
      </div>
    </form>

  </div>

  <div class="content-all-right-in-locais-table">

    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Descrição</th>
          <th>Salas</th>
          <th>Endereço</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if((!empty($resultado_locais))){
         while ($linha = mysqli_fetch_array($resultado_locais)) {
          ?>
        <tr>
          <td><?php echo $linha['loc_id']; ?></td>
          <td><?php echo $linha['loc_descricao']; ?></td>
          <td><?php echo $linha['loc_salas']; ?></td>
          <td><?php echo $linha['loc_endereco']; ?></td>
        </tr>
        <?php }}?>
      </tbody>
    </table>
  </div>

</div>


<?php  include "partials/footer.php"; ?>