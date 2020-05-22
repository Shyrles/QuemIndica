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
              <a href="#" data-toggle="modal" data-target="#modalSuporte"><button class="button_suporte button1"><img src="icones/suporte.png" 
            width="40" height="40" alt = "suporte"></button></a>
              </li>
              <li>
              <a href="#" data-toggle="modal" data-target="#modalEntrar"><!-- Link que abre a janela modal -->
              <button class="button button1 text-uppercase"><strong>Entrar</strong></button>
              </a>
              </li>
          </ul>
          
      </div>
</nav>

</header>

      <div id="modalEntrar" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal Login-->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Login</h4><!-- Título -->
                    </div>
                  
                <div class="modal-body"><!-- Corpo do modal -->
                      
                   <!-- Início do Formulário -->
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
                    
                    </div>

                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->


        <div id="modalSuporte" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal Suporte -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Suporte</h4><!-- Título -->
                    </div>
                  
                <div class="modal-body"><!-- Corpo do modal -->
                      
                   <!-- Início do Formulário -->
                   <div class="main">
        <div class="container">
            <div class="signup-content">

                <div class="signup-img">
                    <img src="../QuemIndica-master/imagens/banner02.jpg" alt="">
                </div>

                <div class="signup-form">
                    <form action="suporte.php" method="POST" class="register-form" id="register-form">

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


                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->
      