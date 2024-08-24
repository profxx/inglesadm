<?php
switch ($_REQUEST["acao"]) {

// ALUNO ---------------------------------------------------------------

        // CADASTRAR ALUNO ----------------

    case "cadastrar":
        $nome = ucwords($_POST["nome"]);
        $valor = $_POST["valor"];
        $dia = ucwords($_POST["dia"]);
        $hora = $_POST["hora"];
        $data_entrada = $_POST["data_entrada"];
        $livro = ucwords($_POST["livro"]);


        $sql = "INSERT INTO aluno (nome, valor, dia, hora, data_entrada, livro, curso) VALUES ('{$nome}', '{$valor}', '{$dia}', '{$hora}', '{$data_entrada}', '{$livro}', '{$_SESSION["usu_curso_id"]}');";


        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Cadastrado com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível efetuar o cadastro.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }

        break;

        // EDITAR ALUNO ----------------

    case "editar":
        $nome = ucwords($_POST["nome"]);
        $valor = $_POST["valor"];
        $dia = ucwords($_POST["dia"]);
        $hora = $_POST["hora"];
        $data_entrada = $_POST["data_entrada"];
        $livro = ucwords($_POST["livro"]);


        $sql = "UPDATE aluno 
                SET 
                    nome='{$nome}', 
                    valor='{$valor}', 
                    dia='{$dia}', 
                    hora='{$hora}',
                    data_entrada='{$data_entrada}',
                    livro='{$livro}'
                WHERE id=" . $_REQUEST['id'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Editado com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível editar.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }

        break;

        // INATIVAR ALUNO ------------
        case "inativar":
 
            $sql = "UPDATE aluno 
                    SET 
                        dia='Inativo'
                    WHERE id=" .$_REQUEST['id'].";";
    
            $res = $conn->query($sql);
    
            if ($res == true) {
                print("<script>alert('Aluno inativado com sucesso.')</script>");
                print('<script>location.href="?page=listar";</script>');
            } else {
                print('<script>alert("Não foi possível fazer a operação.");</script>');
                print('<script>alert($mysqli->error);</script>');
                print('<script>location.href="?page=listar";</script>');
            }
    
            break;

        // EXCLUIR ALUNO ---
    case "excluir":
        $sql = "DELETE FROM aluno WHERE id=".$_REQUEST['id'].";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Excluído com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível excluir o aluno.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }
        break;


// USUÁRIO ------------------------------------------------------------


        // CADASTRAR USUÁRIO ----------------

    case "cadastrar-usuario":
        $usu_nome = ucwords($_POST["usu_nome"]);
        $usu_email = strtolower($_POST["usu_email"]);
        $usu_login = $_POST["usu_login"];
        $usu_senha = $_POST["usu_senha"];

        $sql = "INSERT INTO usuario (usu_nome, usu_email, usu_login, usu_senha) VALUES ('{$usu_nome}', '{$usu_email}', '{$usu_login}', '{$usu_senha}');";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Usuário cadastrado com sucesso.')</script>");
            print('<script>location.href="?page=";</script>');
        } else {
            print('<script>alert("Não foi possível efetuar o cadastro.");</script>');
            print('<script>location.href="?page=";</script>');
        }

        break;


        // EDITAR USUÁRIO ----------------

    case "editar-usuario":
        $usu_nome = ucwords($_POST["usu_nome"]);
        $usu_email = strtolower($_POST["usu_email"]);
        $usu_login = $_POST["usu_login"];
        $usu_senha = $_POST["usu_senha"];


        $sql = "UPDATE aluno SET 
                            usu_nome='{$usu_nome}', 
                            usu_email='{$usu_email}', 
                            usu_login='{$usu_login}',
                            usu_senha='{$usu_senha}'
                            
                        WHERE pk_usu_id=" . $_REQUEST['id'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Editado com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível editar.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }

        break;


        // EXCLUIR USUÁRIO ---- 

    case "excluir-usuario":
        $sql = "DELETE FROM usuario WHERE pk_usu_id=" . $_REQUEST['id'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Usuário excluído com sucesso.')</script>");
            print('<script>location.href="?page=listar-usuario";</script>');
        } else {
            print('<script>alert("Não foi possível excluir o usuário.");</script>');
            print('<script>location.href="?page=listar-usuario";</script>');
        }
        break;


// LANÇAMENTOS - PAGAMENTOS ----------------------------------------------------------


        // CADASTRAR PAGTO -----
    case "cadastrar-pgto":
        $id_aluno = $_REQUEST['id'];
        $conta_recebida = "Inter Micheli";
        $valor = $_REQUEST["valor"];

        $sql = "INSERT INTO lancamento (id_aluno, conta_recebida, valor, data_pagamento) VALUES ('{$id_aluno}','{$conta_recebida}', '{$valor}', CURRENT_DATE);";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Cadastrado com sucesso.')</script>");
            print('<script>location.href="?page=listar-pgto";</script>');
        } else {
            print('<script>alert("Não foi possível efetuar o cadastro.");</script>');
            print('<script>location.href="?page=listar-pgto";</script>');
        }

        break;

    case "editar-pgto":
        $data_pagamento = $_POST['data_pagamento'];
        $id_aluno = $_POST['id_aluno'];
        $valor = $_POST["valor"];
        $conta_recebida = $_POST['conta_recebida'];

        $sql = "UPDATE lancamento SET 
                        data_pagamento='{$data_pagamento}', 
                        id_aluno='{$id_aluno}', 
                        valor='{$valor}', 
                        conta_recebida='{$conta_recebida}'
                        
                    WHERE id_lancamento=" . $_REQUEST['id_lancamento'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Editado com sucesso.')</script>");
            print('<script>location.href="?page=listar-pgto";</script>');
        } else {
            print('<script>alert("');
            print($sql);
            print('");</script>');
            print('<script>alert("Não foi possível editar.");</script>');
            print('<script>location.href="?page=listar-pgto";</script>');
        }

        break;



    case "excluir-pgto":
        $sql = "DELETE FROM lancamento WHERE id_lancamento=" . $_REQUEST['id_lancamento'] . ";";
        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Excluído com sucesso.')</script>");
            print('<script>location.href="?page=listar-pgto";</script>');
        } else {
            echo "<script language='javascript'>";
            echo "alert('" . $sql . "');";
            echo "</script>";
            print('<script>location.href="?page=listarpgto";</script>');
        }
        break;
}
