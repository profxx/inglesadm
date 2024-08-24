<?php

// GERA LISTA - FALTA PAGAR

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


// PRIMEIRA LINHA ---------------------------------------
print('<div class="container text-center">');
print('<div class="row g-3">');



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


// FINAL PRIMEIRA LINHA ----------------------------------
print('</div>');

// FINAL CONTAINER
print('</div><br>');

?>