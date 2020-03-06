<!doctype html>
<html lang="pt-BR">

<head>
    <title>LOGIN</title>
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
        <h1><strong>Bem-vindo(a) ao Quem Indica!</strong></h1>
        </div>
    </section>

    <!-- <section class="banner_conteudo">
        <div class="container">
           
        <span class="text-justify" id="login">

        <form action="login.php">
            <div id="email">
                <label for="email" >E-mail</label><br>
                    <input type="email" name="email" size="80%" id="email"  placeholder="email@email.com">
                    <br><br>
            </div>
                    
            <div id="senha">
                <label for="senha">Senha</label><br>
                   <input type="password" name="senha" size="80%" id="senha" placeholder="senha">
                   <br><br>
            </div>
                
            <div id="lembrarm"> 
                <label for="lembrar">
                    <input type="checkbox" name="lembrar" id="lembrar" value="lembrar" checked>Lembrar de mim
                </label>   
                <br><br>      
            </div>  

            <p id="texto">A combinação de email e senha não é válida</p>
             
        </form>  
      
        </span>
        

        
        </div>
    </section> -->
    <form class="container" id="login">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-dark"><a href="feed.php">Submit</a></button>
</form>

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