<?php include "partials/header.php"; 
verificar_nivel_acesso();
$resultado_usuarios = mysqli_query($conectar,"SELECT * FROM usuarios");

?>
<div class="content-all-right-in-usuarios">
  <div class="content-all-right-in-candidatos-title">
    <h1>Usuários</h1>
  </div>
  <?php if(isset($_SESSION["cadastro_usuarios_sucesso"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-success">
    <p><i class="fa-solid fa-circle-check icon-alert-success"></i> -
      <?php echo $_SESSION["cadastro_usuarios_sucesso"]?></p>
  </div>
  <?php }; 
  unset($_SESSION['cadastro_usuarios_sucesso']);
  ?>
  <?php if(isset($_SESSION["cadastro_usuarios_erro"])){ ?>
  <div class="content-all-right-in-candidatos-alert alert-error">
    <p><i class="fa-solid fa-circle-xmark icon-alert-error"></i> -
      <?php echo $_SESSION["cadastro_usuarios_erro"]?>
    </p>
  </div>
  <?php }; 
  unset($_SESSION["cadastro_usuarios_erro"]);
  ?>
  <div class="content-all-right-in-candidatos-form">
    <h4>Cadastro de Usuários</h4>
    <form action="../controller/cadastro_usuarios.php" method="POST">

      <div class="content-all-right-in-form-input">
        <label for="usu_nome">Nome: </label>
        <input type="text" name="usu_nome" id="usu_nome">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="usu_login">Login: </label>
        <input type="text" name="usu_login" id="usu_login">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="usu_codigo">Senha: </label>
        <input type="text" name="usu_codigo" id="usu_codigo">
      </div>

      <div class="content-all-right-in-form-input">
        <label for="usu_perfil">Perfil: </label>
        <select name="usu_perfil" id="usu_perfil">

          <option value="" selected disabled> Selecione um perfil</option>
          <option value=0>Funcionário</option>
          <option value=1>Administrador</option>
        </select>
      </div>


      <div class="content-all-right-in-form-input content-all-right-in-form-submit">

        <input type="submit" value="Cadastrar">
      </div>
    </form>
  </div>
  <!-- Tabela -->

  <div class="content-all-right-in-usuarios-table">
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Nome</th>
          <th>Login</th>
          <th>Perfil</th>
          <th>Data de Cadastro</th>
          <th>Status</th>
          <th>Ativa/Inativa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if((!empty($resultado_usuarios))){
         while ($linha = mysqli_fetch_array($resultado_usuarios)) {
          ?>
        <tr>
          <td><?php echo $linha['usu_id']; ?></td>
          <td><?php echo $linha['usu_nome']; ?></td>
          <td><?php echo $linha['usu_login']; ?></td>
          <td><?php echo  convert_perfil($linha['usu_perfil']); ?></td>
          <td><?php echo date('d/m/Y', strtotime($linha['usu_acesso'])) ; ?></td>
          <td><?php echo  convert_status($linha['usu_status']); ?></td>
          <td class="table-icons-line"><a
              href="../controller/ativa_inativar_usuarios.php?id=<?php echo $linha['usu_id'];?>"><i
                class="fa-sharp fa-solid fa-repeat"></i></a></td>
        </tr>
        <?php }}?>
      </tbody>
    </table>
  </div>




</div>
<?php  include "partials/footer.php"; ?>