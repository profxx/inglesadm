<h1>Lista de Alunos</h1>
<?php
    $sql = 'SELECT * FROM aluno ORDER BY nome;';

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print("<table class='table table-success table-striped table-hover table-bordered'>");
        print('<tr>');
            print('<th>#</th>');
            print('<th>Nome</th>');
            print('<th>Dia</th>');
            print('<th>Horário</th>');
            print('<th>Dia que entrou</th>');
            print('<th>Livro</th>');
            print('<th>Ações</th>');
            print('</tr>');
        while ($row = $res->fetch_object()){
            print('<tr>');
            print('<td>'.$row->id.'</td>');
            print('<td>'.$row->nome.'</td>');
            print('<td>'.$row->dia.'</td>');
            print('<td>'.$row->hora.'</td>');
            print('<td>'.$row->aluno_data.'</td>');
            print('<td>'.$row->aluno_livro.'</td>');
            print("<td>
                    <!-- Botão Editar -->
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" type='button' class='btn btn-outline-primary'>Editar</button>

                    <!-- Botão Excluir -->
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" type='button' class='btn btn-outline-danger'>Excluir</button>

                    <!-- Botão Incluir Pagamento -->
                    <button onclick=\"if(confirm('Pagamento na data de hoje?')){location.href='?page=salvar&acao=cadastrar-pgto&id=".$row->id."&valor=".$row->valor."';}else{false;}\" type='button' class='btn btn-outline-success' target='listar-pgto.php'>Incluir Pagamento</button>
                    </td>");
            print('</tr>');
        }
        print('</table>');
    }else{
        print('<p class="alert alert-danger">Não há nenhum aluno cadastrado<p>');
    }
?>