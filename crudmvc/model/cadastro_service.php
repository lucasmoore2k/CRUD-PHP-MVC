<?php
class CadastroService{

	private $conexao;
	private $cadastro;

	public function __construct(Conexao $conexao,Cadastro $cadastro){
		$this->conexao = $conexao->conectar();
		$this->cadastro = $cadastro;
	}


    //CRUD
	public function create(){
		$query = 'insert into usuarios(nome_completo,login,senha,ativo) values (:nome,:login,:senha,:ativo)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->cadastro->__get('nome'));
		$stmt->bindValue(':login',$this->cadastro->__get('login'));
		$stmt->bindValue(':senha',$this->cadastro->__get('senha'));
		$stmt->bindValue(':ativo',$this->cadastro->__get('ativo'));
		$stmt->execute();

	}

	public function read(){
		$query = 'select 
		usuario_id,nome_completo,login,senha,ativo 
		from 
		usuarios';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){



		
		$query = "update usuarios SET LOGIN = :login, SENHA = :senha, ATIVO = :ativo, NOME_COMPLETO = :nome WHERE usuarios.USUARIO_ID = :id";
		var_dump($query);
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->cadastro->__get('nome'));
		$stmt->bindValue(':login',$this->cadastro->__get('login'));
		$stmt->bindValue(':senha',$this->cadastro->__get('senha'));
		$stmt->bindValue(':ativo',$this->cadastro->__get('ativo'));
		$stmt->bindValue(':id',$this->cadastro->__get('id'));
		return $stmt->execute();




	}


	public function delete(){
		$query = 'delete from usuarios where usuario_id = :id';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(':id',$this->cadastro->__get('id'));
		$stmt->execute();

	}


}


?>