<?php 


session_start();
$_SESSION['autenticado'];
echo $_SESSION['autenticado'];

$acao = 'read';
require "../controller/cadastro_controller.php";
require "../controller/login_controller.php";



?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Crud - Todos os usuários</title>

  <link rel="stylesheet" href="static/css/w3.css">
  <link rel="stylesheet" href="static/css/santri.css">
  <link rel="stylesheet" href="static/css/toastr.css">

  <link rel="stylesheet" href="static/css-awesome/brands.css">
  <link rel="stylesheet" href="static/css-awesome/fontawesome.css">
  <link rel="stylesheet" href="static/css-awesome/regular.css">
  <link rel="stylesheet" href="static/css-awesome/solid.css">
  <link rel="stylesheet" href="static/css-awesome/svg-with-js.css">
  <link rel="stylesheet" href="static/css-awesome/v4-shims.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
  </style>

</head>

<script>
  
   function hide(){
  document.getElementById('bd').style.display = 'none';
}

function show(){
  document.getElementById('bd').style.display = '';
}

</script>
<body>
  <h3>Todos os usuários</h3>

  <form>
      <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Pesquise um nome" id="busca" onclick="hide()" onblur="show()">
    </form>
      <p class="result"></p>
   

  <script src="static/js/jquery.js"></script>

  <script>

    function editar(id){
      location.href = 'edicao.php?acao=read&id='+id;
    }

    function deletar(id){
      location.href = 'pesquisa_usuarios.php?acao=delete&id='+id;
    }

    //ajax
      $("#busca").keyup(function(){
        var busca = $("#busca").val();
        $.post('../controller/buscaController.php', {busca: busca},function(data){
          $(".result").html(data);
        });
      });



  </script>



  <? if( isset($_GET['teste']) && $_GET['teste'] == 1)  { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center" style="background-color: green">
      <h5>Usuário Incluidok com sucesso!</h5>
    </div>

  <? } ?>


  <? if( isset($_GET['atualizado']) && $_GET['atualizado'] == 1)  { ?>

    <div class="bg-success pt-2 text-white d-flex justify-content-center"  style="background-color: green;color: white">
      <h5>Usuário Atualizado com sucesso!</h5>
    </div>

  <? } ?>



  <div>
    <div id="lista_usuarios" class="w3-margin">
      <!--<button class="w3-button w3-theme w3-margin-top">Buscar</button>-->
      <a href="cadastro_usuarios.php"><button class="w3-button w3-theme w3-margin-top w3-right" type="submit">Cadastrar novo usuário</button></a>


    <table id="bd">
    <thead>
      <tr>
        <th>Nome</td>
          <th>Login</td>
            <th>Ativo</td>
              <th>Opções</td>  
              </tr>
            </thead>
            <tbody>

              <? foreach($cadastrosRecebidos as $indice => $cadastro){?>

                <tr id="cadastro_<?=$cadastro->usuario_id ?>">

                <td><?=$cadastro->nome_completo ?></td>
                  <td><?=$cadastro->login ?></td>
                  <td><?=$cadastro->ativo ?></td>


                  <td>

                    <button class="w3-button w3-theme w3-margin-top" onclick="deletar(<?=$cadastro->usuario_id ?>)"><i class="fas fa-user-times"></i></button>
                    <button class="w3-button w3-theme w3-margin-top" onclick="editar(<?=$cadastro->usuario_id ?>)"><i class="fas fa-edit"></i></button>

                  </td>
                </tr>

                <?}?>

              </tbody>
            </table>

      

              </div>
            </div>
          </body>
          </html>