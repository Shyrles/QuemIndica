<!doctype html>
<html lang="pt-BR">

<head>
    <title>QUEM INDICA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="imagens/logo_icon.svg" type="image/x-icon">
</head>

<body>
    <?php require_once ("header_deslog.php"); ?>
    
    
    <section class="d-flex banner_top">
    <div class="container-fluid d-flex align-content-around flex-wrap">
            <div class="row margens_banner">

                <div class="col d-inline-block">
              
                    <img src="imagens/services.png" class="service" alt="">
                </div>

                <div class="col d-block align-self-center text-center ml-5">
                    <div class="text-center">
                    
                        <h4 class="text-center"><strong>Estamos prontos para ajudar você encontrar o profissional que precisa!</strong></h4>
                        <br>
                        <p class="texto_home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>


                    </div>
                </div>
            </div>
    </div>
    </section>

    <section class="banner_cadastro">     
    <div class="container-fluid">      
        <div class="d-flex justify-content-center">
        <form class="alinha_form">
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Nome</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nome e sobrenome">
                </div>
                <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Usuário</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="usuario">
                </div>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-info mb-2 btn-azul"><a href="registrar.php">Cadastrar</a></button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </section>

    <section class="d-flex banner_middle">
        
    <div class="container-fluid d-flex align-content-around flex-wrap">
        
            <div class="row margens_banner">

                <div class="col d-block align-self-center text-center mr-5">
                <div class="text-center">
                    
                        <h4 class="text-center"><strong>Não só de serviços e produtos que vivemos... aqui seu encontro é perfeito com cultura e lazer!</strong></h4>
                        <br>
                        <p class="texto_meio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>


                    </div>
              
                    
                </div>

                <div class="col d-inline-block">

                <img src="imagens/rede_social.png" class="img_rede_social" alt="">
                    
                </div>
            </div>
    </div>
    </section>

    <section class="d-flex banner_team">

    <div class="container-fluid d-flex align-content-around flex-wrap">
            <div class="row margens_banner">

                <div class="col d-inline-block">
              
                    <img src="imagens/team.png" class="team" alt="">
                </div>

                <div class="col d-block align-self-center text-center mr-5">
                    
                    
                        <h1 class="text-center" id="margem_texto_b"><strong>Quem Indica é uma rede social feita para todos!</strong></h1>
                        <br>
                        <img src="imagens/logo_icon.svg" id="logo_banner" class="rounded mx-auto d-block" alt="">
                        
                        <h3 class="text-center" id="margem_texto_b"><strong>E por todos!</strong></h3>
                 
                </div>
            </div>
            </div>
    </section>
    
    <!-- <section class="section_5">
            <div class="container">
                    <div class="row colunasfooter">
                      <div class="col">
                            <h5 class="footertext"><strong>location</strong></h5>
                            <p class="footertext">2515, John Daniel Drive Clark, MO 65243</p>
                      </div>
                      <div class="col">
                            <h5 class="footertext"><strong>around the web</strong></h5>
                            <div class="container socialmedias">
                                    <a href="#" class="icons"><img src="facebook.png" alt=""></a>
                                    <a href="#" class="icons"><img src="twitter.png" alt=""></a>
                                    <a href="#" class="icons"><img src="linkedin.png" alt=""></a>
                                    <a href="#" class="icons"><img src="instagram.png" alt=""></a>
                            </div>
                      </div>
                      <div class="col">
                            <h5 class="footertext"><strong>about freelancer</strong></h5>
                            <p class="footertext">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                </div>

    </section>

    <footer>
        <p>Copyright - Bootstrap</p>

    </footer> -->
<?php require_once ("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>