<h2>Pagamentos Recebidos <button class="btn btn-primary" onclick="location.href='?page=listar-datas'">Listar Datas</button></h2>
<?php
    $sql = 'SELECT L.data_pagamento, A.nome, L.valor, L.conta_recebida, A.id, L.id_lancamento FROM lancamento as L INNER JOIN aluno as A ON (L.id_aluno = A.id) ORDER BY data_pagamento DESC;';

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print("<table class='table table-success table-striped table-hover table-bordered'>");
        print('<tr>');
            print('<th>Pago em:</th>');
            print('<th>Aluno</th>');
            print('<th>Valor</th>');
            print('<th>Conta</th>');
            print('<th>Ações</th>');
            print('</tr>');
        while ($row = $res->fetch_object()){
            print('<tr>');
            print('<td>'.$row->data_pagamento.'</td>');
            print('<td>'.$row->nome.'</td>');
            print('<td>R$ '.$row->valor.',00</td>');
            print('<td>'.$row->conta_recebida.'</td>');
            print("<td>
                <!-- Botão Editar -->
                <button onclick=\"location.href='?page=editar-pgto&id_lancamento=".$row->id_lancamento."';\" type='button' class='btn btn-outline-primary'>Editar</button>

                <!-- Botão Excluir -->
                <button onclick=\"if(confirm('Excluir o pagamento?')){location.href='?page=salvar&acao=excluir-pgto&id_lancamento=".$row->id_lancamento."';}else{false;}\" type='button' class='btn btn-outline-danger'>Excluir</button>
                </td>");
            print('</tr>');
        }
        print('</table>');
    }else{
        print('<p class="alert alert-danger">Não há nenhum pagamento cadastrado<p>');
    }
?>