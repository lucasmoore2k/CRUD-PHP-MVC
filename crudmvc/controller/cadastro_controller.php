<?php

require "../model/conexao.php";
require "../model/cadastro_model.php";
require "../model/cadastro_service.php";

$acao = isset($_GET['acao']) ? $_GET['acao']: $acao;




if($acao == 'create'){

	$cadastro = new Cadastro();

	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('login',$_POST['login']);
	$cadastro->__set('senha',$_POST['senha']);
	$cadastro->__set('ativo',$_POST['ativo']);

	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao,$cadastro);
	$cadastroService->create();

	header('Location: http://localhost/TestePHP/view/pesquisa_usuarios.php?teste=1');

}else if($acao == 'read'){

	$cadastro = new Cadastro();
	$conexao = new Conexao();
	
	$cadastroService = new CadastroService($conexao,$cadastro);
	$cadastrosRecebidos = $cadastroService->read();

}else if($acao == 'delete'){

	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);

	$conexao = new Conexao();
	
	$cadastroService  = new CadastroService($conexao,$cadastro);
	$cadastroService->delete();
	header('location:pesquisa_usuarios.php');

}else if($acao == 'update'){

	$cadastro = new Cadastro();
	
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('login',$_POST['login']);
	$cadastro->__set('senha',$_POST['senha']);
	$cadastro->__set('ativo',$_POST['ativo']);
	$cadastro->__set('id',$_GET['id']);



	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao,$cadastro);
	
	if($cadastroService->update()){
		header('location: http://localhost/TestePHP/view/pesquisa_usuarios.php?atualizado=1');
	}

	
}






?>