<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - Quem Indica</title>

<!-- área css -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/suporte.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/minhaConta.css">

<!-- área bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


</head>
<body>

<!-- HEADER -->


    
    
<div class="grid-container">

        <header>
            <?php require_once ("header_minhaConta.php"); ?>
        </header>



<!-- FORMULARIO -->

        <!-- <main class="main"> -->

    

<div class="main">
        <div class="container">
            <div class="signup-content">

                <div class="signup-img">
                    <img src="../QuemIndica-master/imagens/banner02.jpg" alt="">
                </div>

                <div class="signup-form">
                    <form action="suporte.php" method="POST" class="register-form" id="register-form">

                        <div class="titulo">
                            <h2>Suporte</h2>
                        </div>

                        <div class="row">
                            <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" value="" name="nome" id="nome" class="form-control" placeholder="Nome">
                        </div>

                        <div class="col">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" value="" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" value="" name="email" id="email" placeholder="@.com">
                        </div>

                        <div class="form-group purple-border">
                            <label for="exampleFormControlTextarea4">Mensagem</label>
                            <textarea class="form-control" name="mensagem" id="email" rows="3"></textarea>
                        </div>
                        
                        <div class="input-group-append" id="enviar">
                            <button class="btn btn-md btn-dark m-0 px-3" type="button" value="" class="submit" name="enviar" id="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
            
</div> <!--fechamento: div.container -->


<!-- FOOTER -->
        <footer>
            <?php require_once ("footer.php");?>
        </footer>


<!-- ÁREA SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>