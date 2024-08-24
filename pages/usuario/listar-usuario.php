<h2>Lista de Usuários <button class="btn btn-primary" onclick="location.href='?page=cadastrar-usuario'">Cadastrar Novo</button></h2>

<?php
    $sql = 'SELECT * FROM usuario ORDER BY usu_nome;';

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print("<table class='table table-success table-striped table-hover table-bordered'>");
        print('<tr>');
            print('<th>#</th>');
            print('<th>Nome</th>');
            print('<th>Email</th>');
            print('<th>Login</th>');
            print('<th>Ações</th>');
            print('</tr>');
        while ($row = $res->fetch_object()){
            print('<tr>');
            print('<td>'.$row->pk_usu_id.'</td>');
            print('<td>'.$row->usu_nome.'</td>');
            print('<td>'.$row->usu_email.'</td>');
            print('<td>'.$row->usu_login.'</td>');
            print("<td>
                    <!-- Botão Editar -->
                    <button onclick=\"location.href='?page=editar-usuario&id=".$row->pk_usu_id."';\" type='button' class='btn btn-outline-primary'>Editar</button>

                    <!-- Botão Excluir -->
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir-usuario&id=".$row->pk_usu_id."';}else{false;}\" type='button' class='btn btn-outline-danger'>Excluir</button>");

            print('</tr>');
        }
        print('</table>');
    }else{
        print('<p class="alert alert-danger">Não há nenhum usuário cadastrado<p>');
    }
?>