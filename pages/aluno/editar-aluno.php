<h1>Editar Aluno</h1>

<?php
    $sql = 'SELECT * FROM aluno WHERE id='.$_REQUEST['id'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

    switch ($row->dia) {
        case "Selecionar": {
            $check0 = "selected";
            break;
        }
        case "Segunda-feira": {
            $check1 = "selected";
            break;
        }
        case "Terça-feira": {
            $check2 = "selected";
            break;
        }
        case "Quarta-feira": {
            $check3 = "selected";
            break;
        }
        case "Quinta-feira": {
            $check4 = "selected";
            break;
        }
        case "Sexta-feira": {
            $check5 = "selected";
            break;
        }
        case "Inativo": {
            $check6 = "selected";
            break;
        }
      }
?>

<form action="?page=salvar" method="PUT">
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
            <option '.$check0.'>Selecionar</option>
            <option '.$check1.'>Segunda-feira</option>
            <option '.$check2.'>Terça-feira</option>
            <option '.$check3.'>Quarta-feira</option>
            <option '.$check4.'>Quinta-feira</option>
            <option '.$check5.'>Sexta-feira</option>
            <option '.$chec65.'>Inativo</option>
        </select>
        <!-- <input type="text" name="dia" class="form-control"> -->
    </div>

    <div class="mb-3">
        <label>Horário</label>
        <select type="text" name="hora" class="form-control" value="<?php print($row->hora); ?>">
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
        <input type="date-local" name="data_entrada" class="form-control" value="<?php print($row->data_entrada); ?>">
    </div>

    <div class="mb-3">
        <label>Livro Atual</label>
        <select type="text" name="livro" class="form-control" value="<?php print($row->livro); ?>">
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
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
