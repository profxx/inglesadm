<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar-usuario">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="usu_nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="usu_email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Login</label>
        <input type="text" name="usu_login" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="usu_senha" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>