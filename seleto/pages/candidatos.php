<?php include "partials/header.php"; 
$resultado = mysqli_query($conectar,"SELECT * FROM candidatos c LEFT JOIN locais l ON c.cand_loc_id = l.loc_id");
$resultado_cargos = mysqli_query($conectar,"SELECT * FROM cargos");
$resultado_locais = mysqli_query($conectar,"SELECT * FROM locais");

?>
<div class="content-all-right-in-candidatos">
  <div class="content-all-right-in-candidatos-title">
    <h1>Candidatos</h1>
  </div>
  <?php if(isset($_SESSION["cadastro_candidatos_sucesso"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-success">
    <p><i class="fa-solid fa-circle-check icon-alert-success"></i> - Cod Inscricao - (
      <?php echo $_SESSION["cand_inscricao"]?>)</p>
  </div>
  <?php }; 
  unset($_SESSION['cadastro_candidatos_sucesso']);
  ?>
  <?php if(isset($_SESSION["cadastro_candidatos_erro"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-error">
    <p><i class="fa-solid fa-circle-xmark icon-alert-error"></i> - <?php echo $_SESSION["cadastro_candidatos_erro"]?>
    </p>
  </div>
  <?php }; 
  unset($_SESSION["cadastro_candidatos_erro"]);
  ?>

  <div class="content-all-right-in-candidatos-form">
    <h4>Cadastro de Candidatos</h4>
    <form action="../controller/cadastro_candidatos.php" method="POST">
      <div class="content-all-right-in-form-input">
        <label for="cand_inscricao">Num inscrição: </label>
        <input type="text" name="cand_inscricao" id="cand_inscricao" size="10" maxlength="4">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_nome">Nome: </label>
        <input type="text" name="cand_nome" id="cand_nome">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_nascimento">Data de Nascimento: </label>
        <input type="date" name="cand_nascimento" id="cand_nascimento">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_endereco">Endereço: </label>
        <input type="text" name="cand_endereco" id="cand_endereco" size="74" maxlength="255">
      </div>
      <div class="content-all-right-in-form-input">
        <label for="cand_fone">Telefone: </label>
        <input type="text" name="cand_fone" id="cand_fone">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_cargo">Cargo Desejado: </label>
        <select size="1" name="cand_cargo" id="cand_cargo">
          <?php
            while ($linha_cargos = mysqli_fetch_array($resultado_cargos)) {
          ?>
          <option value="<?php echo $linha_cargos['car_id']; ?>"><?php echo $linha_cargos['car_descricao']; ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_loc_id">Local da Prova: </label>
        <select size="1" name="cand_loc_id" id="cand_loc_id">
          <option value="" disabled selected>Selecione um local</option>
          <?php
            while ($linha_locais = mysqli_fetch_array($resultado_locais)) {
          ?>
          <option value="<?php echo $linha_locais['loc_id']; ?>"><?php echo $linha_locais['loc_descricao']; ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_pai">Pai: </label>
        <input type="text" name="cand_pai" id="cand_pai">
      </div>
      <div class="content-all-right-in-form-input">
        <label for="cand_mae">Mãe: </label>
        <input type="text" name="cand_mae" id="cand_mae">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_doc_identificacao">Doc. Identificação: </label>
        <input type="text" name="cand_doc_identificacao" id="cand_doc_identificacao">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="cand_tipo_identificacao">Doc. tipo Identificação: </label>
        <select size="1" name="cand_tipo_identificacao" id="cand_tipo_identificacao">

          <option value=2> 2 - RG</option>
          <option value=3> 3 - Cart. Habilitação</option>
          <option value=4> 4 - Cart. Trabalho</option>
          <option value=5> 5 - Cart.Policial (Fed, Mil, Civ)</option>
          <option value=6> 6 - Reg. Conselho (CRM , OAB, etc )</option>
          <option value=7> 7 - Reg. Forças Armadas</option>
        </select>
      </div>

      <div class="content-all-right-in-form-input">
        <label for="data_inscricao">Data da Inscricao: </label>
        <input type="Date" name="data_inscricao" id="data_inscricao">
      </div>
      <div class="content-all-right-in-form-input content-all-right-in-form-submit">

        <input type="submit" value="Cadastrar">
      </div>
    </form>
  </div>


  <!-- Tabela -->

  <div class="content-all-right-in-candidatos-table">
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Cod inscrição</th>
          <th>Nome</th>
          <th>Local da Prova</th>
          <th>Data da Inscrição</th>
          <th>Cartão de Identificação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if((!empty($resultado))){
         while ($linha = mysqli_fetch_array($resultado)) {
          ?>
        <tr>
          <td><?php echo $linha['cand_id']; ?></td>
          <td><?php echo $linha['cand_inscricao']; ?></td>
          <td><?php echo $linha['cand_nome']; ?></td>
          <td><?php echo $linha['loc_descricao']; ?></td>
          <td><?php echo date('d/m/Y', strtotime($linha['cand_dt_inscricao'])) ; ?></td>
          <td class="table-icons-line"><a href="visualizar_candidato.php?id=<?php echo $linha['cand_id']; ?>"><i
                class="fa-solid fa-eye"></i></a></td>
        </tr>
        <?php }}?>
      </tbody>
    </table>
  </div>
</div>



<?php include "partials/footer.php"; ?>