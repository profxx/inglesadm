<h1>Novo Aluno</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Valor</label>
        <input type="text" name="valor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dia da Aula</label>
        <input type="text" name="dia" class="form-control">
    </div>

    <div class="mb-3">
        <label>Hora</label>
        <input type="text" name="hora" class="form-control">
    </div>

    <div class="mb-3">
        <label>Dia (do mês) que começou</label>
        <input type="text" name="aluno_data" class="form-control">
    </div>

    <div class="mb-3">
        <label>Livro Atual</label>
        <input type="text" name="aluno_livro" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
