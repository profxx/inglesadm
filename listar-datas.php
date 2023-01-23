<h1>Alunos por Data de Pagamento</h1>
<?php
    $sql = 'SELECT * FROM aluno ORDER BY aluno_data, nome;';

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print("<table class='table table-success table-striped table-hover table-bordered'>");
        print('<tr>');
            print('<th>Nome</th>');
            print('<th>Dia</th>');
            print('<th>Horário</th>');
            print('<th>Dia que entrou</th>');
            print('</tr>');
        while ($row = $res->fetch_object()){
            print('<tr>');
            print('<td>'.$row->nome.'</td>');
            print('<td>'.$row->dia.'</td>');
            print('<td>'.$row->hora.'</td>');
            print('<td>'.$row->aluno_data.'</td>');
            print('</tr>');
        }
        print('</table>');
    }else{
        print('<p class="alert alert-danger">Não há nenhum aluno cadastrado<p>');
    }
?>