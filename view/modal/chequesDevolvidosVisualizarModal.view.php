<?php include('model/chequesDevolvidosVisualizar.model.php'); ?>

<div class="modal fade" id="<?= $modal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="fundo-cabecalho">
        
        <h1>DADOS DO CHEQUE</h1>
      </div>
      <div class="modal-body">
          <div class="tabela-ver-cheque">
          <div class="table-responsive">
            <table class="table-sm table-striped fs-6">
              <tr>
                <th colspan="2">STATUS</th>
                <th colspan="3"><?= $status ?></th>
              </tr>
              <tr>
                <th colspan="2">DATA INCLUS�O NO SISTEMA</th>
                <th colspan="3"><?= dma($dthrInclusao) ?></th>
              </tr>
              <tr>
                <th colspan="2">MEDITERR�NEO</th>
                <th colspan="3"><?= $filial ?></th>
              </tr>
              <tr>
                <th colspan="2">BANCO</th>
                <th colspan="3"><?= $bco . ' - ' . $vetorBanco[$bco] ?></th>
              </tr>
              <tr>
                <th colspan="2">NOME DO CORRENTISTA</th>
                <th colspan="3"><?= $nome ?></th>
              </tr>
              <tr>
                <th colspan="2">NOME DO CLIENTE</th>
                <th colspan="3"><?= $nomeCliente ?></th>
              </tr>
              <tr>
                <th colspan="2">CPF/CNPJ</th>
                <th colspan="3"><?= $cpfcnpj ?></th>
              </tr>
              <tr>
                <th colspan="2">TELEFONE PARA CONTATO</th>
                <th colspan="3"><?= $telefone ?></th>
              </tr>
              <tr>
                <th colspan="2" >VALOR DO CHEQUE</th>
                <th colspan="3"><?= v2($valor) ?></th>
              </tr>
              <tr>
                <th colspan="2">N� CHEQUE</th>
                <th colspan="3"><?= $nrcheque ?></th>
              </tr>
              <tr>
                <th colspan="2">MOTIVO</th>
                <th colspan="3"><?= $motivo . ' - ' . $vetorMotivo[$motivo] ?></th>

              </tr>
              <tr>
                <th colspan="2">DATA CHEQUE</th>
                <th colspan="3"><?= dma($dtCheque) ?></th>
              </tr>
              <tr>
                <th colspan="2">DATA DEVOLU��O</th>
                <th colspan="3"><?= dma($dtDevol) ?></th>
              </tr>
              <tr>
                <th colspan="2">DATA QUITA��O</th>
                <th colspan="3"><?= dma($dtQuitacao) ?></th>
              </tr>
              <tr>
                <th colspan="2">PDV</th>
                <th colspan="3"><?= $pdv ?></th>
              </tr>
              <tr>
                  <th class="centralizar fundo-cabecalho" colspan="5">Observa��es</th>
              </tr>
              <tr>
                  <th colspan="2">Data Hora</th>
                  <th>Usu�rio</th>
                  <th colspan="2">Observa��o</th>
              </tr>
              <?php $sql1 = ("SELECT * FROM ccp_chequeDevObs AS Obs WHERE id_cheque = $id ORDER BY datahora"); 
                    $qry1 = odbc_exec($connP, $sql1);
                    while($row1 = odbc_fetch_array($qry1)){
        echo '<tr>
                  <th colspan="2">'.dmaH($row1['datahora']).'</th>
                  <th>'.$row1['usuario'].'</th>
                  <th colspan="2">'.$row1['obs'].'</th>
              </tr>';
              } 
              ?>
              <tr>
                  <th class="centralizar fundo-cabecalho" colspan="5">Anexos</th>
              </tr>
              <tr>
                  <th colspan="2">Data Hora</th>
                  <th>Usu�rio</th>
                  <th>Descri��o/Nome</th>
                  <th>Tipo</th>
              </tr>
              <?php 
              $sql2 = ("SELECT * FROM ccp_chequeDevAnexo WHERE id_cheque = $id ORDER BY datahora") ;
              $qry2 = odbc_exec($connP, $sql2);
                    while($row2 = odbc_fetch_array($qry2)){
                    $link2 = "'".$row_Anexo['id'].'.'.$row_Anexo['tipo']."','chDev'";  
        echo '<tr>
                  <th colspan="2">'.dmaH($row2['datahora']).'</th>
                  <th>'.$row2['usuario'].'</th>
                  <th>'.$row2['descricao'].'</th>
                  <th>'.$row2['tipo'].'</th>
              </tr>';
              } 
              ?>
              <tr>
                  <th class="centralizar fundo-cabecalho" colspan="5">Eventos</th>
              </tr>
              <tr>
                  <th colspan="2">Data Hora</th>
                  <th>Usu�rio</th>
                  <th colspan="2">Descri��o</th>
              </tr>
              <?php $sql3 = ("SELECT * FROM ccp_chequeDevEventos AS e WHERE e.id_cheque = $id ORDER BY dthrEvento"); 
                    $qry3 = odbc_exec($connP, $sql3);
                    while($row3 = odbc_fetch_array($qry3)){
        echo '<tr>
                  <th colspan="2">'.dmaH($row3['dthrEvento']).'</th>
                  <th>'.$row3['usuario'].'</th>
                  <th colspan="2">'.$row3['evento'].'</th>
              </tr>';
              } 
              ?>
            </table>  
            </div>
          </div>
      </div>
      <div class="fundo-rodape">
        <div class='d-grid gap-2 d-md-flex mt-4 justify-content-md-center'>
          <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-sm btn-light">Confirmar Quita��o</button>
          <button type="button" class="btn btn-sm btn-light">Sem Solu��o</button>
          <button type="button" class="btn btn-sm btn-light">Incluir Observa��o</button>
          <button type="button" class="btn btn-sm btn-light">Incluir Anexo</button>
        </div>
      </div>
    </div>
  </div>
</div>