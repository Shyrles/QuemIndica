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
        <h1><strong>Criar Conta</strong></h1>
        </div>
    </section>
           

                 <form class="form-signin1" action="registro.php" method="POST">
                 <div class="form-group">
                  <label for="nome">Nome</label>
                    <input type="text" class=" radius form-control" id="nome" required>
                    <p class="obrigatorio">Obrigatório</p>
                 </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class=" radius form-control" id="email" required>
                  <p class="obrigatorio">Obrigatório</p>
                 </div>
                 <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class=" radius form-control" id="senha" required>
                  <p class="obrigatorio">Obrigatório</p>
                 </div>
                
                 
                    <label for="identifica">Como você se identifica?</label> <br>

                    <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="masculino" value="opcao1">
                       <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="feminino" value="opcao2">
                       <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="personalizado" value="opcao3" >
                      <label class="form-check-label" for="personalizado">Personalizado</label>
                    </div>
                          
                    <div class="espaco">
                
                       <label for="termos">
                      <input type="checkbox" name="termos" id="termos" value="termos">Aceita os termos e condições</label>
                   <div class="espaco">
                      <button class="padrao" type="submit"><a class= "padrao" href="feed.php">Criar Conta</a></button>
                  </div>
                </form>
        
        
        
   


    
<?php require_once ("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
