<h1>Editar Pagamento</h1>

<?php
    $sql = 'SELECT * FROM lancamento WHERE id_lancamento='.$_REQUEST['id_lancamento'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar-pgto">
    <input type="hidden" name="id_lancamento" value="<?php print($row->id_lancamento);?>">
    <div class="mb-3">
        <label>Pago em:</label>
        <input type="text" name="data_pagamento" value="<?php print($row->data_pagamento); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Aluno</label>
        <input type="text" name="id_aluno" value="<?php print($row->id_aluno); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor</label>
        <input type="text" name="valor" value="<?php print($row->valor); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Conta</label>
        <input type="text" name="conta_recebida" value="<?php print($row->conta_recebida); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
