<h2>Calendário Semanal</h2>

<?php

$sql_segunda = 'SELECT nome, dia, hora FROM aluno WHERE (dia = "Segunda-feira") ORDER BY hora;';
$sql_terca = 'SELECT nome, dia, hora FROM aluno WHERE (dia = "Terça-feira") ORDER BY hora;';
$sql_quarta = 'SELECT nome, dia, hora FROM aluno WHERE (dia = "Quarta-feira") ORDER BY hora;';
$sql_quinta = 'SELECT nome, dia, hora FROM aluno WHERE (dia = "Quinta-feira") ORDER BY hora;';
$sql_sexta = 'SELECT nome, dia, hora FROM aluno WHERE (dia = "Sexta-feira") ORDER BY hora;';

// MONTAGEM SEGUNDA
$res_segunda = $conn->query($sql_segunda);
$qtd_segunda = $res_segunda->num_rows;

print("<div class='container text-center'>
            <div class='row  calendario'>
                <div class='col'>
                    <table class='table table-success table-striped table-hover table-bordered'>
                        <tr>
                            <th colspan=\"2\">Segunda</th>    
                        </tr>');");
while ($row_segunda = $res_segunda->fetch_object()){
    print('<tr>');
    print('<td>'.$row_segunda->nome.'</td>');
    print('<td>'.$row_segunda->hora.'</td>');
    print('</tr>');
}
print('</tr></table></div>');
    
// MONTAGEM TERÇA
$res_terca = $conn->query($sql_terca);
$qtd_terca = $res_terca->num_rows;

print('<div class="col"><table class="table table-success table-striped table-hover table-bordered"><tr>');
    print('<th colspan="2">Terça</th>');
    print('</tr>');
while ($row_terca = $res_terca->fetch_object()){
    print('<tr>');
    print('<td>'.$row_terca->nome.'</td>');
    print('<td>'.$row_terca->hora.'</td>');
    print('</tr>');
}
print('</tr></table></div>');

// MONTAGEM QUARTA
$res_quarta = $conn->query($sql_quarta);
$qtd_quarta = $res_quarta->num_rows;

print('<div class="col"><table class="table table-success table-striped table-hover table-bordered"><tr>');
    print('<th colspan="2">Quarta</th>');
    print('</tr>');
while ($row_quarta = $res_quarta->fetch_object()){
    print('<tr>');
    print('<td>'.$row_quarta->nome.'</td>');
    print('<td>'.$row_quarta->hora.'</td>');
    print('</tr>');
}
print('</tr></table></div>');

// MONTAGEM QUINTA
$res_quinta = $conn->query($sql_quinta);
$qtd_quinta = $res_quinta->num_rows;

print('<div class="col"><table class="table table-success table-striped table-hover table-bordered"><tr>');
    print('<th colspan="2">Quinta</th>');
    print('</tr>');
while ($row_quinta = $res_quinta->fetch_object()){
    print('<tr>');
    print('<td>'.$row_quinta->nome.'</td>');
    print('<td>'.$row_quinta->hora.'</td>');
    print('</tr>');
}
print('</tr></table></div>');

// MONTAGEM QUINTA
$res_sexta = $conn->query($sql_sexta);
$qtd_sexta = $res_sexta->num_rows;

print('<div class="col"><table class="table table-success table-striped table-hover table-bordered"><tr>');
    print('<th colspan="2">Sexta</th>');
    print('</tr>');
while ($row_sexta = $res_sexta->fetch_object()){
    print('<tr>');
    print('<td>'.$row_sexta->nome.'</td>');
    print('<td>'.$row_sexta->hora.'</td>');
    print('</tr>');
}
print('</tr></table></div>');
?>