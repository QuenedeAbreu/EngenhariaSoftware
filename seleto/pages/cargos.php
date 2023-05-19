<?php include "partials/header.php"; 
$resultado_cargos = mysqli_query($conectar,"SELECT * FROM cargos");

?>
<div class="content-all-right-in-cargos">
  <div class="content-all-right-in-seleto-title">
    <h1>Cargos</h1>
  </div>

  <?php if(isset($_SESSION["cadastro_cargo_sucesso"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-success">
    <p><i class="fa-solid fa-circle-check icon-alert-success"></i> -
      <?php echo $_SESSION["cadastro_cargo_sucesso"]?></p>
  </div>
  <?php }; 
  unset($_SESSION['cadastro_cargo_sucesso']);
  ?>
  <?php if(isset($_SESSION["cadastro_cargos_erro"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-error">
    <p><i class="fa-solid fa-circle-xmark icon-alert-error"></i> - <?php echo $_SESSION["cadastro_cargos_erro"]?></p>
  </div>
  <?php }; 
  unset($_SESSION["cadastro_cargos_erro"]);
  ?>
  <div class="content-all-right-in-cargos-form">
    <h4>Cadastro de Cargos</h4>
    <form action="../controller/cadastro_cargo.php" method="POST">
      <div class="content-all-right-in-form-input">
        <label for="car_descricao">Descrição: </label>
        <input type="text" name="car_descricao" id="car_descricao">
      </div>
      <div class="content-all-right-in-form-input">
        <label for="car_escolaridade">Escolaridade: </label>
        <input type="text" name="car_escolaridade" id="car_escolaridade">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="car_nivel">Nível de ensino: </label>
        <select size="1" name="car_nivel" id="car_nivel">

          <option value="" disabled selected>Selecione um cargo</option>
          <option value="F">Ensino Fundamental</option>
          <option value="M">Ensino Médio</option>
          <option value="M">Ensino Superior</option>

        </select>
      </div>

      <div class="content-all-right-in-form-input">
        <label for="car_vagas">Qunatidade de Vagas: </label>
        <input type="number" name="car_vagas" id="car_vagas">
      </div>

      <div class="content-all-right-in-form-input content-all-right-in-form-submit">

        <input type="submit" value="Cadastar">
      </div>
    </form>
  </div>

  <div class="content-all-right-in-cargos-table">
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Descrição</th>
          <th>Escolaridade</th>
          <th>Nível</th>
          <th>QTD Vagas</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if((!empty($resultado))){
         while ($linha = mysqli_fetch_array($resultado_cargos)) {
          ?>
        <tr>
          <td><?php echo $linha['car_id']; ?></td>
          <td><?php echo $linha['car_descricao']; ?></td>
          <td><?php echo $linha['car_escolaridade']; ?></td>
          <td><?php echo convert_cargos($linha['car_nivel']); ?></td>
          <td><?php echo  $linha['car_vagas'] ; ?></td>
        </tr>
        <?php }}?>
      </tbody>
    </table>
  </div>

</div>


<?php  include "partials/footer.php"; ?>