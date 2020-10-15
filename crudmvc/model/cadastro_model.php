<?php

class Cadastro{
	private $id;
	private $nome;
	private $login;
	private $senha;
	private $ativo;



	public function __get($attr){
		return $this->$attr;
	}

	public function __set($attr,$value){
		return $this->$attr = $value;
	}

}


?>