<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
        $nome = ucwords($_POST["nome"]);
        $valor = $_POST["valor"];
        $dia = ucwords($_POST["dia"]);
        $hora = $_POST["hora"];
        $aluno_data = $_POST["aluno_data"];
        $aluno_livro = ucwords($_POST["aluno_livro"]);

        $sql = "INSERT INTO aluno (nome, valor, dia, hora, aluno_data, aluno_livro) VALUES ('{$nome}', '{$valor}', '{$dia}', '{$hora}', '{$aluno_data}', '{$aluno_livro}');";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Cadastrado com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível efetuar o cadastro.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }

        break;

    case "editar":
        $nome = ucwords($_POST["nome"]);
        $valor = $_POST["valor"];
        $dia = ucwords($_POST["dia"]);
        $hora = $_POST["hora"];
        $aluno_data = $_POST["aluno_data"];
        $aluno_livro = ucwords($_POST["aluno_livro"]);

        $sql = "UPDATE aluno SET 
                        nome='{$nome}', 
                        valor='{$valor}', 
                        dia='{$dia}', 
                        hora='{$hora}',
                        aluno_data='{$aluno_data}',
                        aluno_livro='{$aluno_livro}'
                        
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

    case "excluir":
        $sql = "DELETE FROM aluno WHERE id=" . $_REQUEST['id'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Excluído com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível excluir o aluno.");</script>');
            print('<script>location.href="?page=listar";</script>');
        }
        break;

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

    case "excluir":
        $sql = "DELETE FROM aluno WHERE id=" . $_REQUEST['id'] . ";";

        $res = $conn->query($sql);

        if ($res == true) {
            print("<script>alert('Excluído com sucesso.')</script>");
            print('<script>location.href="?page=listar";</script>');
        } else {
            print('<script>alert("Não foi possível excluir o aluno.");</script>');
            print('<script>location.href="?page=listar";</script>');
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
