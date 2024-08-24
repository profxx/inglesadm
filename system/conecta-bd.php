<?php
        // Used for Localhost
    //define('HOST', 'localhost');
    //define('USER', 'root');
    // define('PASS', '');
    // define('BASE', 'cad_aluno');
    
        // Used for AWS
    // define('HOST', 'sqlexpress.coosy869ip2u.sa-east-1.rds.amazonaws.com');
    // define('USER', 'admin');
    // define('PASS', 'eduardo2');
    // define('BASE', 'cad_aluno');

        // Used for 000webhost
    // define('HOST', 'localhost');
    // define('USER', 'id20535011_root');
    // define('PASS', 'Eduardo@2006');
    // define('BASE', 'id20535011_cad_aluno');
    
    define('HOST', 'localhost');
    define('USER', 'u635953892_Ldva0');
    define('PASS', 'Inglesadm@1');
    define('BASE', 'u635953892_hlQQg');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if (!$conn){
        echo '<script>alert("Connection failed")</script>';
    }
?>