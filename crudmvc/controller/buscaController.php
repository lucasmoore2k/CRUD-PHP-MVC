

<?php



include('../model/conexaoPesquisa.php');


    function editar(){
      header('edicao.php?acao=read&id='+$row['usuario_id']);
    }

    function deletar(){
      header('pesquisa_usuarios.php?acao=delete&id='+$row['usuario_id']);
    }



$busca =  $_POST['busca'];


$query = mysqli_query($conn, "SELECT usuario_id,nome_completo,login,ativo FROM usuarios WHERE nome_completo LIKE '%$busca%'");
$num   = mysqli_num_rows($query);
if($num >0){
	while($row = mysqli_fetch_assoc($query)){
      //echo $row['nome_completo'].' - '.$row['login'].'-'.$row['ativo'].'<br /><hr>';
		//$data[] = utf8_encode($row['nome_completo']);
		//$data[] = $row['nome_completo'];
		echo " <thead>
    <tr>
      <th>Nome</td>
        <th>Login</td>
          <th>Ativo</td>
            <th>Opções</td>  
            </tr>
          </thead>
          <tbody>


            <tr>

              <td>".$row['nome_completo']."</td>
              <td>".$row['login']."</td>
              <td>".$row['ativo']."</td>

              <td>

                <button class='w3-button w3-theme w3-margin-top' onclick='deletar(".$row['usuario_id'].")'><i class='fas fa-user-times'></i></button>
                <button class='w3-button w3-theme w3-margin-top' onclick='editar(".$row['usuario_id'].")'><i class='fas fa-edit'></i></button>

              </td>

            </tr>

          </tbody>

          ";

        }
      }else{
       echo "Esta Pessoa Não Existe!";
     }


     //echo json_encode($data)

     ?>