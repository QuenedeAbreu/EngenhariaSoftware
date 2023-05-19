<?php include "partials/header.php"; 
$resultado_candidatos_vagas = mysqli_query($conectar,"SELECT count(ca.cand_id) Qtd_candidatos,
                                                  c.car_descricao cand_descricao
                                            FROM candidatos ca, cargos c
                                            WHERE c.car_id = ca.cand_car_id
                                            GROUP BY c.car_id
                                            ORDER BY 2");

$resultado_candidatos_vagas_table = mysqli_query($conectar,"SELECT cand_inscricao, 
                                                             car_descricao,
                                                             UPPER(cand_nome) as cand_nome,
                                                             cand_nascimento,
                                                             cand_doc_identificacao,
                                                             cand_tipo_doc_ident,
                                                             cand_dt_inscricao
                                                             FROM candidatos ca, cargos c
                                                             WHERE c.car_id = ca.cand_car_id
                                                             ORDER BY c.car_descricao,
                                                                      ca.cand_nome");

?>
<div class="content-all-right-in-seleto">
  <div class="content-all-right-in-seleto-title">
    <h1>Seleto - Dashboard</h1>
  </div>
  <div class="content-all-right-in-dashboard">
    <div class="content-all-right-in-dashboard-title">
      <h2>Inscritos por Vaga:</h2>
    </div>

    <div class="content-all-right-in-dashboard-items">
      <?php while($linha = mysqli_fetch_array($resultado_candidatos_vagas)){?>
      <div class="content-all-right-in-dashboard-item">
        <div class="content-all-right-in-dashboard-item-icon">
          <i class="fa-solid fa-person-digging"></i>
        </div>
        <div class="content-all-right-in-dashboard-item-info">
          <h1><?php echo $linha['Qtd_candidatos'] ?></h1>
          <p><?php echo $linha['cand_descricao'] ?></P>
        </div>
      </div>
      <?php } ?>

    </div>
    <div class="content-all-right-in-dashboard-table">
      <table>
        <thead>
          <tr>
            <th>Inscrição</th>
            <th>Cargo</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Doc. de Indentificação</th>
            <th>Tipo Doc. de Indentificação</th>
            <th>Data da inscrição</th>
          </tr>
        </thead>
        <tbody>
          <?php
        if((!empty($resultado_candidatos_vagas_table))){
         while ($linha_table = mysqli_fetch_array($resultado_candidatos_vagas_table)) {
          ?>
          <tr>
            <td><?php echo $linha_table['cand_inscricao']; ?></td>
            <td><?php echo $linha_table['car_descricao']; ?></td>
            <td><?php echo $linha_table['cand_nome']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($linha_table['cand_nascimento'])) ; ?></td>
            <td><?php echo $linha_table['cand_doc_identificacao']; ?></td>
            <td><?php echo $linha_table['cand_tipo_doc_ident']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($linha_table['cand_dt_inscricao'])) ; ?></td>
          </tr>
          <?php }}?>
        </tbody>
      </table>
    </div>

  </div>
</div>



<?php include "partials/footer.php"; ?>