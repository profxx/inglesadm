<h1>Editar Aluno</h1>

<?php
    $sql = 'SELECT * FROM aluno WHERE id='.$_REQUEST['id'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print($row->id);?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print($row->nome); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor</label>
        <input type="text" name="valor" value="<?php print($row->valor); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dia</label>
        <input type="text" name="dia" value="<?php print($row->dia); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Hora</label>
        <input type="text" name="hora" value="<?php print($row->hora); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dia (do mês) que começou</label>
        <input type="text" name="aluno_data" value="<?php print($row->aluno_data); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Livro Atual</label>
        <input type="text" name="aluno_livro" value="<?php print($row->aluno_livro); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
