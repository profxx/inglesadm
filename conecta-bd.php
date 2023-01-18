<?php
    //define('HOST', 'localhost');
    //define('USER', 'root');
    // define('PASS', '');
    // define('BASE', 'cad_aluno');
    
    define('HOST', 'sqlexpress.coosy869ip2u.sa-east-1.rds.amazonaws.com');
    define('USER', 'admin');
    define('PASS', 'eduardo2');
    define('BASE', 'cad_aluno');

    $conn = new MySQLi(HOST, USER, PASS, BASE);
    
?>