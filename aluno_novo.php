<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <!-- OWL Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


</head>

<body class="conteudo">

    <main class="main-login">
        <!--COLUNA TEXTO -->
        <div class="left-login">
            <img class="conteudo-principal-imagem" src="#" alt="Logo">
            <h1 class="conteudo-principal-escrito-titulo">Faça o seu cadastro de interesse</h1>
            <p class="conteudo-principal-escrito-subtitulo">Esse cadastro é sem compromisso e entraremos em contato para nivelamento.</p>
        </div>
        <!--COLUNA FORMULÁRIO -->
        <div class="right-login">
            <div class="card-login">
                <form action="?page=salvar" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="Nome Completo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="E-mail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="Whatsapp - Ex: (24) 99999-8888" class="form-control">
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div><!--FIM CARD LOGIN-->
        </div>

    </main><!--FIM MAIN - CONTEUDO PRINCIPAL-->

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