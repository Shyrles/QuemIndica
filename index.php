<!doctype html>
<html lang="en">

<head>
    <title>QUEM INDICA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="imagens/LOGO.png" type="image/x-icon">
</head>

<body>
    <?= require_once("header_deslog.php"); ?>
    <section>
        <div class="container">
            <div class="row banner">
                <div class="col-md-6 d-inline-block">
                    <!-- <h2 id="tam">Sobre Nós</h2> -->

                    <!-- <p class="caracter "> -->
                    <!-- Essa é uma Rede Social onde você poderá interagir pedindo e fornecendo indicações. Através de hashtags você escolhe o seu tema preferido , podendo assim ter em seu feed de notícias as indicações que mais lhe agrada.</p> -->
                    <!-- <p class="caracter">Os seus interesses serão escolhidos por hashtags que você poderá definir como favoritas.</p> -->
                    <p class="caracter">Estamos prontos para ajudar você encontrar o profissional que precisa</p>
                    <img src="imagens/banner02.jpg" width="350" height="300" alt="">
                </div>

                <div class="col-md-6 d-inline text-center ">
                    <img src="imagens/LOGO.png" class="d-inline-block  " width="150" height="150" alt="">
                    <!-- <h2 id="cor">Quem Indica</h2> -->
                    <div class="but text-justify">
                        <button id="botao" type="button" class="btn btn-primary btn-lg btn-block">Cadastre -se</button>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Faça seu Login</button>

                        <p id="letra">Ao se cadastrar você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="rodape">
            <div class="container d-flex">
                <ul class="nav flex-inline">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Termos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Política de Dados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Política de Cookies</a>
                    </li>

                </ul>

            </div>

        </div>


    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>