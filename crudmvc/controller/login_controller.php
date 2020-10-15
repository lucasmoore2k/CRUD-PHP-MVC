<?php


include('../model/conexaoLogin.php');


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$login = $_POST['login'];


if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location:index.php?Erro=Preencha todos os campos!');
}else if(isset($login)){
	$teste = mysqli_query($conexao,"SELECT login,senha FROM usuarios WHERE login = '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
	if (mysqli_num_rows($teste)<=0){
		header('Location:index.php?erroLog=Usuário não encontrado');
	
	}
}else{
	header('Location:pesquisa_usuarios.php');
}






?>