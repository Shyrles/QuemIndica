<!doctype html>
<html lang="pt-BR">

<head>
    <title>REGISTRAR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="shortcut icon" href="imagens/logo_icon.svg" type="image/x-icon">
</head>

<body>
    
    <?php require_once ("header_deslog.php"); ?>

    <section class="banner_azul">
        <div class="container text-center">
        <img src="imagens/logo_icon.svg" class="rounded" id="quemindica" alt="Quem Indica">
        <h1><strong>Registrar</strong></h1>
        </div>
    </section>

    <section class="banner_conteudo">
        <div class="container">
           
        <span class="text-justify" id="registrar">

                 <form action="registro.php" method="POST">
                    <div id="nome"> <br> <br>
                            <label for="nome" >Nome</label><br>
                            <input class="radius" type="text" name="nome" size="50px" id="nome"  placeholder="Seu nome">
                          
                            <p class="obrigatorio">Obrigatório</p>
                          <br>  
                    </div>
                    
                    <div id="email">
                        <label for="email" >Email</label><br>
                        <input  class="radius" type="email" name="email" size="50px" id="email"  placeholder="email@email.com">
                     
                        <p class="obrigatorio">Obrigatório</p>
                          <br>               
                    </div>   


                  <div id="senha">
                     <label for="senha">Senha</label><br>
                     <input class="radius" type="password" name="senha" size="50px" id="senha" placeholder="senha">
                     <br>
                     <p class="obrigatorio">Obrigatório</p>
                     <br>
                  </div>
               
                  <div>
                    <label for="identifica">Como você se identifica?</label> <br>

                    <div>
                            <label for="masculino">
                            <input type="radio" name="genero" id="masculino" value="masculino">masculino
                            </label>

                            <label for="feminino">
                            <input type="radio" name="genero" id="feminino" value="feminino">
                            Feminino</label>

                            <label for="outro">
                            <input type="radio" name="genero" id="outro" value="outro">
                            Especificar outro</label>
                    </div>
      
                  </div>

             
                 <label for="comentarios" id="comentarios" name="comentarios">Comentários </label> <br>
                 <textarea class="radius" name="comentarios" id="" cols="50" rows="5"></textarea>

                 <div>
                     <label for="termos"><input type="checkbox" name="termos" id="termos" value="termod">Aceita os termos e condições</label>
                 </div>
                 <button class="padrao" type="submit"><a class= "padrao" href="feed.php">Enviar</a></button>
                </form>
        </span>
        
        
        </div>
    </section>

<!-- 
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


    </footer> -->
<?php require_once ("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
