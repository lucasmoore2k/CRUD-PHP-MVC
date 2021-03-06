<?php 

session_start();
$_SESSION['autenticado'];
echo $_SESSION['autenticado'];


$acao = '';
require "../controller/cadastro_controller.php";



?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Crud - Cadastro de usuários</title>

  <link rel="stylesheet" href="static/css/w3.css">
  <link rel="stylesheet" href="static/css/santri.css">
  <link rel="stylesheet" href="static/css/toastr.css">

  <link rel="stylesheet" href="static/css-awesome/brands.css">
  <link rel="stylesheet" href="static/css-awesome/fontawesome.css">
  <link rel="stylesheet" href="static/css-awesome/regular.css">
  <link rel="stylesheet" href="static/css-awesome/solid.css">
  <link rel="stylesheet" href="static/css-awesome/svg-with-js.css">
  <link rel="stylesheet" href="static/css-awesome/v4-shims.css">

</head>

<body>
  <script src="static/js/jquery.js"></script>



  <div>
    <div id="lista_usuarios" class="w3-margin">

      <h4>Cadastro de usuários</h4>

      <div style="display: none;">
        <label>Usuário 1</label>
      </div>



      <form method="post" action="../controller/cadastro_controller.php?acao=create">


          <div>
            <label>Nome</label>
            <input type="text" class="w3-input w3-block w3-border" name="nome">
          </div>

          <div>
            <label>Login</label>
            <input type="text" class="w3-input w3-block w3-border" name="login">
          </div>

          <div>
            <label>Senha</label>
            <input type="text" class="w3-input w3-block w3-border" name="senha">
          </div>

          <div>
            <label>Ativo</label>
            <input type="text" class="w3-input w3-block w3-border" name="ativo">
          </div>

  
        <button class="w3-button w3-theme w3-margin-top w3-margin-bottom">Cadastrar</button>
        <a href="pesquisa_usuarios.php"><button class="w3-button w3-margin-top w3-margin-bottom w3-right">Cancelar</button></a>
      </form>


    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-md-5 col-md-offset-1">
      <div class="card-body border-primary-mb3 justify-content-center ">
       
      </div>
    </div>
  </div>



</div>
</body>

</html>