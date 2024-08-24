<?php
session_start();
include "../../system/conecta-bd.php";

if(isset($_POST['usu_login']) && isset($_POST['usu_senha'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['usu_login']);
    $password = validate($_POST['usu_senha']);

    if (empty($username)){
        header("Location: ../../index.php?error=Insira o nome do usuário");
        exit();
    }else if(empty($password)){
        header("Location: ../../index.php?error=Insira a senha");
        exit();
    }else{
        $sql = "SELECT * FROM usuario WHERE usu_login='$username' AND usu_senha='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['usu_login'] == $username && $row['usu_senha'] == $password){
                $_SESSION['usu_login'] = $row['usu_login'];
                $_SESSION['usu_nome'] = $row['usu_nome'];
                $_SESSION['pk_usu_id'] = $row['pk_usu_id'];
                header("Location: ../../tela_adm.php");
                exit();
            }
        }else{
            header("Location: ../../index.php?error=Usuário ou senha incorretos");
            exit();
        }
    }   

}else{
    header("Location: ../../index.php");
    exit();
}
