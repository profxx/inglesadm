<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>

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
                Hi there :)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col mt-5">

                <?php
                include("conecta-bd.php");
                switch (@$_REQUEST['page']) {
                    case "pgto":
                        include('cadastrar-pgto.php');
                        break;
                    case "listar":
                        include('listar-alunos.php');
                        break;
                    case "novo":
                        include('cadastrar-aluno.php');
                        break;
                    case "salvar":
                        include("salvar.php");
                        break;
                    case "editar":
                        include("editar-aluno.php");
                        break;
                    case "editar-pgto":
                        include("editar-pgto.php");
                        break;
                    case "listar-pgto-aluno":
                        include("listar-pgto-aluno.php");
                        break;
                    case "listar-pgto":
                        include("listar-pgto.php");
                        break;
                    case "calendario":
                        include("calendario.php");
                        break;
                    case "listar-datas":
                        include("listar-datas.php");
                        break;
                    default:
                        include("landing-page.php");
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