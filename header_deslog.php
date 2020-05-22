<header class="container-fluid fixed-top">     
  
<nav class="navbar" id="btn_qi"><!-- Código do NavBar -->
    
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand " href="#">
          <img src="imagens/logo_icon.svg" width="50" height="50" alt="">
          <strong>Quem Indica</strong> 
        </a>
        
      </div>
      
          
          <ul class="nav navbar-nav navbar-right list-group list-group-horizontal">
              <li>
              <a href="suporte.php"><button class="button_suporte button1"><img src="icones/suporte.png" 
            width="40" height="40" alt = "suporte"></button></a>
              </li>
              <li>
              <a href="#" data-toggle="modal" data-target="#myModal"><!-- Link que abre a janela modal -->
              <button class="button button1 text-uppercase"><strong>Entrar</strong></button>
              </a>
              </li>
          </ul>
          
      </div>
</nav>

</header>

      <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Login</h4><!-- Título -->
                    </div>
                    <div class="modal-body"><!-- Corpo do modal -->
                        
                    <form class="form-signin" action="login.php" method="POST">
     
      
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required=""><br>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-block padrao" type="submit">Entrar</button>
      <div class="mb-3 text-center">
      <a href = "#">Esqueci minha senha</a> 
      </div>
      <button class="btn btn-lg btn-block padrao" type="submit">Cadastrar</button>
    </form> 
                    <!-- Início do Formulário -->
                    <!-- <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Digite seu email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Digite sua senha">
                            </div>
                            <button class="btn btn-block btn-info">Enviar</button>
                        </form> -->
                    </div>
                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->
      