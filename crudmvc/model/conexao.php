<?php

class Conexao{

	//Conexão no formato de classe
	private $host = 'localhost';
	private $dbname = 'teste_santri';
	private $user = 'root';
	private $pass = '';

	public function conectar(){
		try{

			//construtor
			$conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname",
				"$this->user","$this->pass"
			);

			return $conexao;

		} catch(PDOException $e){
			echo 'Mensagem de erro: '.$e->getMessage();
		}
	}


}


?>