<?php


$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'teste_santri';


$conexao = mysqli_connect($servername,$user,$pass,$dbname);

if(!$conexao){
	die("conexao falha".mysqli_connect_error());
}





/*

	$dsn='mysql:host=localhost;dbname=teste_santri';
	$user = 'root';
	$pass = '';

	$conexao = new PDO($dsn,$user,$pass);

*/
	?>