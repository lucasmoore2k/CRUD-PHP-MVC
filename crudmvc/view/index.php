
<?php

session_start();
$usuario1 = 'autenticado';
$_SESSION['autenticado'] = $usuario1;




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Crud MVC</title>

    <link rel="stylesheet" href="static/css/w3.css">
    <link rel="stylesheet" href="static/css/santri.css">
    <link rel="stylesheet" href="static/css/toastr.css">

    <link rel="stylesheet" href="static/css-awesome/brands.css">
    <link rel="stylesheet" href="static/css-awesome/fontawesome.css">
    <link rel="stylesheet" href="static/css-awesome/regular.css">
    <link rel="stylesheet" href="static/css-awesome/solid.css">
    <link rel="stylesheet" href="static/css-awesome/svg-with-js.css">
    <link rel="stylesheet" href="static/css-awesome/v4-shims.css">

    <style>
      #login {
        max-width: 95%;
        margin: auto;
        width: 380px;
        margin-top: 5%;
      }

      #logo-cliente {
        max-width: 100%;
        margin: auto;
        width: 700px;    
      }

      #logo-santri {
        max-width: 50%;
        margin: auto;
        width: 380px;    
      }
    </style>

  </head>
  <body style="background-color: #A52A2A;">
    <script src="static/js/jquery.js"></script>


    <div id="login" style="border: 2px solid white;background-color: white">
      <form action="pesquisa_usuarios.php" method="post">
      <img id="logo-cliente" class="w3-margin-top" src="static/imagens/logo.png"/>
      <input class="w3-input w3-border w3-margin-top" type="text" name="usuario" placeholder="Usuário">
      <input class="w3-input w3-border w3-margin-top" type="password" name="senha" placeholder="Senha">
      <button class="w3-button w3-theme w3-margin-top w3-block" name="login" type="submit">Logar</button>




    <div style="text-align: center; color: red">
    <p class="text-warning">
            <? if(isset($_GET['Erro'])) {
            echo $_GET['Erro'];}
          ?></p>

          <p class="text-warning">
            <? if(isset($_GET['erroLog'])) {
            echo $_GET['erroLog'];}
          ?></p>


          </div>
     
             </form>
    </div>





  </body>
</html>