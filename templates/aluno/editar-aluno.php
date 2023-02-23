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
        <label>Dia da Aula</label>
        <select type="text" name="dia" class="form-control">
            <option>Selecionar</option>
            <option>Segunda-feira</option>
            <option>Terça-feira</option>
            <option>Quarta-feira</option>
            <option>Quinta-feira</option>
            <option>Sexta-feira</option>
        </select>
        <!-- <input type="text" name="dia" class="form-control"> -->
    </div>

    <div class="mb-3">
        <label>Horário</label>
        <select type="text" name="hora" class="form-control">
            <option>Selecionar</option>
            <option>5:20pm</option>
            <option>5:30pm</option>
            <option>6:20pm</option>
            <option>6:30pm</option>
            <option>7:20pm</option>
            <option>7:30pm</option>
            <option>8:20pm</option>
            <option>8:30pm</option>
            <option>9:20pm</option>
            <option>9:30pm</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Dia (do mês) que começou</label>
        <input type="date-local" name="aluno_data" class="form-control">
    </div>

    <div class="mb-3">
        <label>Livro Atual</label>
        <select type="text" name="aluno_livro" class="form-control">
            <option>Selecionar</option>
            <option>NAT GEO World Link Intro</option>
            <option>NAT GEO World Link 1</option>
            <option>NAT GEO World Link 2</option>
            <option>NAT GEO World Link 3</option>
            <option>Top Notch Fundamentals</option>
            <option>Top Notch 1</option>
            <option>Top Notch 2</option>
            <option>Top Notch 3</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Ativo</label>
        <input type="checkbox" name="aluno_ativo" value="1" checked>
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
