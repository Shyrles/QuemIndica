<!doctype html>
<html lang="pt-BR">

<head>
    <title>QUEM INDICA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="imagens/logo_icon.svg" type="image/x-icon">
</head>

<body>
    <?php require_once ("header_deslog.php"); ?>
    
    
    <section class="d-flex banner_top">
        
        <div class="container">
                <div class="box">
                    <img src="imagens/trabalhadores_lupa.png" class="service img-fluid" alt="">

                    <h4 class="text-center font_h4">Procura um serviço?</h4>
                            <p class="text-center texto_home font_p"> No Quem Indica você encontra o que precisa com indicações 
                            feitas pelas pessoas que você mais confia...
                            Estamos prontos para ajudar você encontrar o profissional que precisa!    
                        </p>
            </div>
        </div>

    </section>

    <section class="d-flex banner_cadastro">     
    <div class="container-fluid d-flex align-content-around flex-wrap justify-content-center">      
        <div class="d-flex">
        <form class="d-inline-block">
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

        <div class="container">
            <div class="text-center box_img">
                <img src="imagens/rede_social.png" class="img_rede_social img-fluid" alt="">
            </div>
            <div class="box_text">
            <h4 class="text-center font_h4">O que indica?</h4>                    
                    <p class="text-center texto_meio font_p px-5">Não só de serviços e produtos que vivemos... aqui seu encontro é perfeito 
                            com cultura e lazer! Entre e descubra o que seus amigos estão vendo, ouvindo, lendo...</p>
            </div>
        </div>
    
    </section>

    <section class="d-flex banner_team">

        <div class="container">
            <div class= "text-center box_img_left">
                <img src="imagens/team.png" class="team" alt="">
            </div>

                <div class="box_text_right">                
                <h3 class="text-center font_h3 py-3"><strong>Quem Indica é uma rede social feita para todos!</strong></h3>
                        
                        <img src="imagens/logo_icon.svg" id="logo_banner" class="rounded mx-auto d-block" alt="">
                        
                        <p class="text-center font_p pt-1"><strong>E por todos!</strong></p>                
                </div>

        </div>


    </section>
    

<?php require_once ("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>