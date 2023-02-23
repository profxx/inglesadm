<h1>Editar Usuário</h1>

<?php
    $sql = 'SELECT * FROM usuario WHERE pk_usu_id='.$_REQUEST['id'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar-usuario">
    <input type="hidden" name="id" value="<?php print($row->id);?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="usu_nome" value="<?php print($row->usu_nome); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="usu_email" value="<?php print($row->usu_email); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Login</label>
        <input type="text" name="usu_login" value="<?php print($row->usu_login); ?>"  class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="usu_senha" value="<?php print($row->usu_senha); ?>"  class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
