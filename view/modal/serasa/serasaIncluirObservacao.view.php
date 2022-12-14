<!--MODAL INCLUIR OBSERVAÇÃO-->
<div class="modal fade" id="incluirObservacaoModal" tabindex="-1" aria-labelledby="incluirObservacaoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="fundo-cabecalho">
        <h1>INCLUIR OBSERVAÇÃO</h1>
      </div>
      <div class="modal-body">
        <form id="incluirObservacaoForm" method="POST">
          <input type="hidden" name="p" value="5" required>
          <input type="hidden" id="id_observacao" name="id_requisicao" required>
          <div class="mb-3">
            <p class="texto-de-advertencia">REGISTRE AQUI ALGUMA OBSERVAÇÃO SOBRE ESTE SERASA</p>
            <textarea name="observacao" id="Text" cols="50" rows="10" style="white-space: pre"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-dismiss="modal">Fechar</button>
        <button value="gravarObservacao" name="action" type="submit" class="btn btn-outline-success btn-sm">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--/MODAL INCLUIR OBSERVAÇÃO-->