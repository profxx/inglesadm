<h2>
    Lista de Inativos
    <button class="btn btn-primary btn-sm" onclick="location.href='?page=listar'">Voltar para Ativos</button>
</h2>
<?php
    $sql = 'SELECT * FROM aluno WHERE dia = "Inativo" ORDER BY nome;';

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print("<table class='table table-success table-striped table-hover table-bordered'>");
        print('<tr>');
            print('<th>#</th>');
            print('<th>Nome</th>');
            print('<th>Livro</th>');
            print('<th>Ações</th>');
            print('</tr>');
        while ($row = $res->fetch_object()){
            print('<tr>');
            print('<td>'.$row->id.'</td>');
            print('<td>'.$row->nome.'</td>');
            print('<td>'.$row->aluno_livro.'</td>');
            print("<td>
                    <!-- Botão Editar -->
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" type='button' class='btn btn-outline-primary'>Editar</button>

                    <!-- Botão Excluir -->
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" type='button' class='btn btn-outline-danger'>Excluir</button>

                    <!-- Botão Extrato -->
                    <button onclick=\"location.href='?page=listar-pgto-aluno&id=".$row->id."&nome=".$row->nome."';\" type='button' class='btn btn-outline-warning' target='listar-pgto.php'>Extrato</button>
                                      
                    <!-- Botão Incluir Pagamento -->
                    <button onclick=\"if(confirm('Pagamento na data de hoje?')){location.href='?page=salvar&acao=cadastrar-pgto&id=".$row->id."&valor=".$row->valor."';}else{false;}\" type='button' class='btn btn-success' target='listar-pgto.php'>Incluir Pagto</button>
                    </td>");
            print('</tr>');
        }
        print('</table>');
    }else{
        print('<p class="alert alert-danger">Não há nenhum aluno cadastrado<p>');
    }
?>