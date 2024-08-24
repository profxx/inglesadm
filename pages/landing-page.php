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

$sql_falta_pagar = '
SELECT a.nome
FROM aluno a
LEFT JOIN lancamento l ON a.id = l.id_aluno
  AND MONTH(l.data_pagamento) = MONTH(CURRENT_DATE())
  AND YEAR(l.data_pagamento) = YEAR(CURRENT_DATE())
WHERE l.id_aluno IS NULL
AND a.dia != "Inativo"
AND a.valor != 0;';
$res_falta_pagar = $conn->query($sql_falta_pagar);

$sql_worldlink_intro = 'SELECT COUNT(distinct nome) AS qtdWLIntro FROM aluno WHERE livro="NAT GEO World Link Intro" AND dia != "Inativo"';
$res_qtd_WLIntro = $conn->query($sql_worldlink_intro);
$qtd_WLI = $res_qtd_WLIntro->fetch_object()->qtdWLIntro;


$sql_worldlink_1 = 'SELECT COUNT(distinct nome) AS qtdWL1 FROM aluno WHERE livro="NAT GEO World Link 1" AND dia != "Inativo"';
$res_qtd_WL1 = $conn->query($sql_worldlink_1);
$qtd_WL1 = $res_qtd_WL1->fetch_object()->qtdWL1;


$sql_worldlink_2 = 'SELECT COUNT(distinct nome) AS qtdWL2 FROM aluno WHERE livro="NAT GEO World Link 2" AND dia != "Inativo"';
$res_qtd_WL2 = $conn->query($sql_worldlink_2);
$qtd_WL2 = $res_qtd_WL2->fetch_object()->qtdWL2;


$sql_worldlink_3 = 'SELECT COUNT(distinct nome) AS qtdWL3 FROM aluno WHERE livro="NAT GEO World Link 3" AND dia != "Inativo"';
$res_qtd_WL3 = $conn->query($sql_worldlink_3);
$qtd_WL3 = $res_qtd_WL3->fetch_object()->qtdWL3;

$sql_topnotch_fund = 'SELECT COUNT(distinct nome) AS qtdTNFund FROM aluno WHERE livro="Top Notch Fundamentals" AND dia != "Inativo"';
$res_qtd_TNFund = $conn->query($sql_topnotch_fund);
$qtd_TNF = $res_qtd_TNFund->fetch_object()->qtdTNFund;

$sql_topnotch_1 = 'SELECT COUNT(distinct nome) AS qtdTN1 FROM aluno WHERE livro="Top Notch 1" AND dia != "Inativo"';
$res_qtd_TN1 = $conn->query($sql_topnotch_1);
$qtd_TN1 = $res_qtd_TN1->fetch_object()->qtdTN1;

$sql_topnotch_2 = 'SELECT COUNT(distinct nome) AS qtdTN2 FROM aluno WHERE livro="Top Notch 2" AND dia != "Inativo"';
$res_qtd_TN2 = $conn->query($sql_topnotch_2);
$qtd_TN2 = $res_qtd_TN2->fetch_object()->qtdTN2;

$sql_topnotch_3 = 'SELECT COUNT(distinct nome) AS qtdTN3 FROM aluno WHERE livro="Top Notch 1" AND dia != "Inativo"';
$res_qtd_TN3 = $conn->query($sql_topnotch_3);
$qtd_TN3 = $res_qtd_TN3->fetch_object()->qtdTN3;


// PRIMEIRA LINHA ---------------------------------------
print('<div class="container text-center">');
print('<div class="row g-3">');

// MONTAGEM CURSO
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header"><h3 class="card-title"><img src="images/lamp-icon.png" alt="icon" width="30" height="30"> Curso de Inglês</h3></div>');
print('<div class="card-body">');
print('<p class="card-text">Nome: DOM</p>');
// print('<p class="card-text"><a href="templates/usuario/cadastrar-usuario.php">Cadastrar Usuário</a></p>');
print('</div>');
print('</div>');
print('</div>');
    
// MONTAGEM QUANTIDADE DE ALUNOS
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header"><h3 class="card-title"><img src="images/stats-icon.png" alt="icon" width="30" height="30"> Educacional</h3></div>');
print('<div class="card-body"><p class="card-text"><p>'); 
print($qtd); print(' alunos ativos</p>');
print('<p>Faltas na semana: 2</p>'); // AJUSTAR
print('<p>Sem tarefa: -</p>'); // AJUSTAR
print('<p>Novos alunos: Nenhum a aprovar</p>'); // AJUSTAR
print('</div>'); 
print('</div>');
print('</div>');

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

// MONTAGEM LISTA FALTA PAGAR
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header"><h3 class="card-title"><img src="images/fat-icon.png" alt="icon" width="30" height="30"> Falta Pagar </h3></div>');
print('<div class="card-body">');
while ($row = mysqli_fetch_array($res_falta_pagar)) {
    printf('<p>%s</p>', $row[0]);
}
print('</div>'); 
print('</div>');
print('</div>');



// MONTAGEM LIVROS - NÍVEIS
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header">');
print('<h3 class="card-title"><img src="images/book-icon.png" alt="icon" width="30" height="30">');
print(' Livros <img src="images/book-icon.png" alt="icon" width="30" height="30"></h3></div>');
print('<div class="card-body">');

print('<p class="card-text">');
print($qtd_WLI);
print(' no NAT GEO World Link Intro</p>');

print('<p class="card-text">');
print($qtd_WL1);
print(' no NAT GEO World Link 1</p>');

print('<p class="card-text">');
print($qtd_WL2);
print(' no NAT GEO World Link 2</p>');

print('<p class="card-text">');
print($qtd_WL3);
print(' no NAT GEO World Link 3</p>');

print('<br>');

print('<p class="card-text">');
print($qtd_TNF);
print(' no TOP NOTCH FUND.</p>');

print('<p class="card-text">');
print($qtd_TN1);
print(' no TOP NOTCH 1</p>');

print('<p class="card-text">');
print($qtd_TN2);
print(' no TOP NOTCH 2</p>');

print('<p class="card-text">');
print($qtd_TN3);
print(' no TOP NOTCH 3</p>');

print('</div>'); 
print('</div>'); 
print('</div>');


// FINAL PRIMEIRA LINHA ----------------------------------
print('</div>');

// FINAL CONTAINER
print('</div><br>');

?>