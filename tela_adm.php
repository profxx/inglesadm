<?php
session_start();

if (isset($_SESSION['pk_usu_id']) && isset($_SESSION['usu_nome'])) {

?>


    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inglês ADM</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

        <!-- OWL Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    </head>

    <body>
        <!-- MENU SUPERIOR -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/flag-icon.png" width="30" height="30" alt="">
                    Hello, <?php echo $_SESSION['usu_nome']; ?> :)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tela_adm.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar-pgto">Listar Pagamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Aluno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=calendario">Calendário Semanal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar-datas">Listar Datas</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="?page=cadastrar-usuario">Cadastrar Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar-usuario">ListarUsuário</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="?page=logout">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col mt-5">

                    <?php
                    include("system/conecta-bd.php");
                    switch (@$_REQUEST['page']) {
                        case "pgto":
                            include('templates/pagamento/cadastrar-pgto.php');
                            break;
                        case "listar":
                            include('templates/aluno/listar-alunos.php');
                            break;
                        case "novo":
                            include('templates/aluno/cadastrar-aluno.php');
                            break;
                        case "salvar":
                            include("system/salvar.php");
                            break;
                        case "editar":
                            include("templates/aluno/editar-aluno.php");
                            break;
                        case "editar-pgto":
                            include("templates/pagamento/editar-pgto.php");
                            break;
                        case "listar-pgto-aluno":
                            include("templates/pagamento/listar-pgto-aluno.php");
                            break;
                        case "listar-pgto":
                            include("templates/pagamento/listar-pgto.php");
                            break;
                        case "calendario":
                            include("templates/calendario/calendario.php");
                            break;
                        case "listar-datas":
                            include("templates/aluno/listar-datas.php");
                            break;
                        case "logout":
                            include("templates/usuario/logout.php");
                            break;
                        case "cadastrar-usuario":
                            include("templates/usuario/cadastrar-usuario.php");
                            break;
                        case "listar-usuario":
                            include("templates/usuario/listar-usuario.php");
                            break;
                        case "editar-usuario":
                            include("templates/usuario/editar-usuario.php");
                            break;
                        case "tela_adm":
                            include("templates/landing-page.php");
                        default:
                            include("templates/landing-page.php");
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer>
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="js/bootstrap.bundle.min.js"></script>

            <!-- Instafeed JS -->
            <script type="text/javascript" src="js/instafeed.min.js"></script>

            <!-- OWL Carousel JS -->
            <script src="js/jquery.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
        </footer>

    </body>

    </html>

<?php } else {
    header("Location: index.php");
    exit();
}

?>