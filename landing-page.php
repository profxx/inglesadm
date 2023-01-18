<?php

$sql_qtd_alunos = 'SELECT COUNT(distinct nome) AS qtdRegistros FROM aluno;';
$res_qtd_alunos = $conn->query($sql_qtd_alunos);
$qtd = $res_qtd_alunos->fetch_object()->qtdRegistros;

$sql_faturamento_mensal = 'SELECT SUM(valor) AS faturamento FROM aluno';
$res_faturamento = $conn->query($sql_faturamento_mensal);
$fat = $res_faturamento->fetch_object()->faturamento;

$sql_recebido = 'SELECT SUM(valor) AS recebido FROM lancamento';
$res_recebido = $conn->query($sql_recebido);
$rec = $res_recebido->fetch_object()->recebido;

$sql_worldlink_intro = 'SELECT COUNT(distinct nome) AS qtdWLIntro FROM aluno WHERE aluno_livro="NAT GEO World Link Intro"';
$res_qtd_WLIntro = $conn->query($sql_worldlink_intro);
$qtd_WLI = $res_qtd_WLIntro->fetch_object()->qtdWLIntro;

$sql_worldlink_1 = 'SELECT COUNT(distinct nome) AS qtdWL1 FROM aluno WHERE aluno_livro="NAT GEO World Link 1"';
$res_qtd_WL1 = $conn->query($sql_worldlink_1);
$qtd_WL1 = $res_qtd_WL1->fetch_object()->qtdWL1;

$sql_worldlink_2 = 'SELECT COUNT(distinct nome) AS qtdWL2 FROM aluno WHERE aluno_livro="NAT GEO World Link 2"';
$res_qtd_WL2 = $conn->query($sql_worldlink_2);
$qtd_WL2 = $res_qtd_WL2->fetch_object()->qtdWL2;

$sql_worldlink_3 = 'SELECT COUNT(distinct nome) AS qtdWL3 FROM aluno WHERE aluno_livro="NAT GEO World Link 3"';
$res_qtd_WL3 = $conn->query($sql_worldlink_3);
$qtd_WL3 = $res_qtd_WL3->fetch_object()->qtdWL3;

$sql_topnotch_fund = 'SELECT COUNT(distinct nome) AS qtdTNFund FROM aluno WHERE aluno_livro="Top Notch Fundamentals"';
$res_qtd_TNFund = $conn->query($sql_topnotch_fund);
$qtd_TNF = $res_qtd_TNFund->fetch_object()->qtdTNFund;

$sql_topnotch_1 = 'SELECT COUNT(distinct nome) AS qtdTN1 FROM aluno WHERE aluno_livro="Top Notch 1"';
$res_qtd_TN1 = $conn->query($sql_topnotch_1);
$qtd_TN1 = $res_qtd_TN1->fetch_object()->qtdTN1;

$sql_topnotch_2 = 'SELECT COUNT(distinct nome) AS qtdTN2 FROM aluno WHERE aluno_livro="Top Notch 2"';
$res_qtd_TN2 = $conn->query($sql_topnotch_2);
$qtd_TN2 = $res_qtd_TN2->fetch_object()->qtdTN2;

$sql_topnotch_3 = 'SELECT COUNT(distinct nome) AS qtdTN3 FROM aluno WHERE aluno_livro="Top Notch 1"';
$res_qtd_TN3 = $conn->query($sql_topnotch_3);
$qtd_TN3 = $res_qtd_TN3->fetch_object()->qtdTN3;

// PRIMEIRA LINHA ---------------------------------------
print('<div class="container text-center">');
print('<div class="row g-3">');

// MONTAGEM CURSO
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/lamp-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Curso de Inglês</h3></div>');
print('<div class="card-body">');
print('<p class="card-text">DOM</p></div>');
print('</div>');
print('</div>');
    
// MONTAGEM QUANTIDADE DE ALUNOS
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/stats-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Quantidade Alunos</h3></div>');
print('<div class="card-body"><p class="card-text">');
print($qtd);
print(' alunos</p></div>');
print('</div>'); 
print('</div>');

// MONTAGEM FATURAMENTO MENSAL
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<div class="card-header"><h3 class="card-title"><img src="images/fat-icon.png" alt="icon" width="30" height="30"> Financeiro</h3></div>');
print('<div class="card-body">Total: R$ ');
print($fat);
print(',00</div>');
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
print('<br>');
// SEGUNDA LINHA -----------------------------------------
print('<div class="row g-3">');

// MONTAGEM RECEBIDO NO MÊS
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/camera-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Recebido no Mês</h3></div>');
print('<div class="card-body">R$ ');
print($rec);
print(',00</div>');
print('</div>'); 
print('</div>');

// MONTAGEM FALTA RECEBER
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/camera2-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Falta Receber</h3></div>');
print('<div class="card-body">R$ ');
print($fat - $rec);
print(',00</div>');
print('</div>'); 
print('</div>');

// MONTAGEM 7
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/wallet-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Em Atraso</h3></div>');
print('<div class="card-body"><p class="card-text">');
print('Nenhum (em construção)</p></div>');
print('</div>'); 
print('</div>');

// MONTAGEM 8
print('<div class="col-12 col-md-6 col-lg-3">');
print('<div class="card">');
print('<img src="images/crafting-icon.png" alt="icon" class="card-img-top">');
print('<div class="card-header"><h3 class="card-title">Educational</h3></div>');
print('<div class="card-body"><p class="card-text">');
print('Lista de Presença</p></div>');
print('</div>'); 
print('</div>');

// FINAL SEGUNDA LINHA ------------------------------------
print('</div>');

// FINAL CONTAINER
print('</div><br>');

?>