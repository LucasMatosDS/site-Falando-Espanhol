<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="./icone.ico">
    <title>Falando Espanhol</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </head>
  <body id="fundo-contato">
    <div class="container">
      <div class="block-form">
        <div class="row center">
        <h5>Envio de E-mail</h5>
          <img class="logo1" src="img/logo1.png">
        <h6>Escreva para mim,</h6>
        <h6>Mande sugestões para o site. dicas e dúvidas serão bem vindas.</h6>
      </div>
          <div class="row">
              <form method="POST" class="col s12" action="email.php" id="formulario">
                <div class="row">
                  <!-- <div class="input-field col s6">
                    <input disabled value="falandoespanholrs@gmail.com" name="email" id="email" type="email" class="validate">
                  </div> -->
                  <!-- <! falandoespanholrs@gmail.com -->
                  <div class="input-field col s6">
                    <input placeholder="Informe o seu E-mail" name="emailusu" id="email" type="email">
                  </div>
                 <div class="input-field col s6">
                 <input placeholder="Digite seu nome" id="nome" name="nome" type="text">
                 </div>
                </div>
                  <div class="row">
                  <div class="input-field col s6">
                 <input placeholder="Informe o assunto" id="assunto" name="assunto" type="text">
                 </div>
                    <div class="input-field col s6">
                    <textarea placeholder="Digite sua mensagem" id="textarea" name="mensagem" class="materialize-textarea"></textarea>
                  </div>
                </div>
              </form>
              <!-- <input onclick="window.open('index.html')" class="envio" type="submit" name="cadastrar" value="Cadastrar" class="btn">
              <input class="envio" type="reset" onclick="limparCampos()" name="Limpar" value="limpar" class="btn">-->
              <button class="envio" type="submit" class="waves-effect waves-light" name="cadastrar" onclick="mensagem();limparCampos()">Enviar</button>
              <button class="envio" class="waves-effect waves-light" name="Limpar" onclick="limparCampos()">Limpar</button>
             </div>
            </div>
           </div>

    <script type="text/javascript">

     function limparCampos(){
          document.getElementById('formulario').reset();
     }

     function mensagem(){
         alert("email enviado com sucesso!");
     }

            //Or with jQuery
   $(document).ready(function(){
     $('.sidenav').sidenav();
       });

       $(document).ready(function() {
         $('input#input_text, textarea#textarea2').characterCounter();
       });

       $(document).ready(function() {
  M.updateTextFields();
});
   // Or with jQuery
    </script>

    <!--  Scripts-->
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
