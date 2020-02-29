<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Suporte*</title>
            <link rel="stylesheet" href="css/suporte.css">
            <link rel="shortcut icon" href="imagens/logo-quem-indica.png" type="image/x-icon">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>

        <body>
        <header>


        </header>


<main class="container">
    <h1>Suporte</h1>

    <form action="contato.html" method="post">

        <div class="nome"><label for="nome"></label><br>
            <input type="text" name="nomecontato" id="Nome" placeholder="Nome*" required></div>

        <div class="sobrenome"><label for="sobrenome"></label><br>
            <input type="text" name="sobrenomecontato" id="Sobrenome" placeholder="Sobrenome*" required></div>

        <div class="email"><label for="email"></label><br>
            <input type="email" name="email" id="email" placeholder="Email*" required></div>

        <div class="telefone"><label for="telefone"></label><br>
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone*" maxlength="11" required></div>
            
        <div class="mensagem"><textarea name="mensagem" id="mensagem" cols="50" rows="10" placeholder="Mensagem*" required></textarea></div>

        <button type="submit">Enviar</button>
    </form>        
</main>
        <footer>

        </footer>
    
</body>

    </html>
