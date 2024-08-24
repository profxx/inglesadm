<?php

$sql_qtd_alunos = 'SELECT COUNT(distinct nome) AS qtdRegistros FROM aluno WHERE dia != "Inativo";';
$res_qtd_alunos = $conn->query($sql_qtd_alunos);
$qtd = $res_qtd_alunos->fetch_object()->qtdRegistros;


$sql_faturamento_mensal = 'SELECT SUM(valor) AS faturamento FROM aluno';
$res_faturamento = $conn->query($sql_faturamento_mensal);
$fat = $res_faturamento->fetch_object()->faturamento;


$sql_recebido = 'SELECT 
    SUM(valor) AS recebido, 
    CASE EXTRACT(MONTH FROM data_pagamento) 
        WHEN 1 THEN "Janeiro" 
        WHEN 2 THEN "Fevereiro" 
        WHEN 3 THEN "Março" 
        WHEN 4 THEN "Abril" 
        WHEN 5 THEN "Maio" 
        WHEN 6 THEN "Junho" 
        WHEN 7 THEN "Julho" 
        WHEN 8 THEN "Agosto" 
        WHEN 9 THEN "Setembro" 
        WHEN 10 THEN "Outubro" 
        WHEN 11 THEN "Novembro" 
        WHEN 12 THEN "Dezembro" 
    END AS mes, 
    COUNT(id_lancamento) AS qtdPagtos, 
    EXTRACT(YEAR FROM data_pagamento) AS ano 
FROM 
    lancamento 
GROUP BY 
    ano, mes 
ORDER BY 
    ano DESC, 
    EXTRACT(MONTH FROM data_pagamento) DESC;
';
$res_recebido = $conn->query($sql_recebido);


// PRIMEIRA LINHA ---------------------------------------
print('<div class="container text-center">');
print('<div class="row g-3">');

    
// MONTAGEM FINANCEIRO
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header"><h3 class="card-title"><img src="images/fat-icon.png" alt="icon" width="30" height="30"> Financeiro</h3></div>');
print('<div class="card-body">');
while ($row = mysqli_fetch_array($res_recebido)) {
    printf('<h5 class="card-title">%s de %s</h5>', $row[1], $row[3]);
    printf('<p>Valor: R$ %s,00 </p>', $row[0]);
    printf('<p>Número de pagtos: %s </p><br>', $row[2]); 
}
print('</div>'); 
print('</div>');
print('</div>');


// FINAL PRIMEIRA LINHA ----------------------------------
print('</div>');

// FINAL CONTAINER
print('</div><br>');

?>