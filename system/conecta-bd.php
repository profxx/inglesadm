<?php
        // Used for Localhost
    //define('HOST', 'localhost');
    //define('USER', 'root');
    // define('PASS', '');
    // define('BASE', 'cad_aluno');

        // Used for Production
    define('HOST', 'localhost');
    define('USER', 'id20535011_root');
    define('PASS', 'Eduardo@2006');
    define('BASE', 'id20535011_cad_aluno');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if (!$conn){
        echo '<script>alert("Connection failed")</script>';
    }
?>