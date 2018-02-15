<?php 

require_once('db.class.php');

$usuario = $_POST['estabelecimento'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$senha = $_POST['senha'];


$objDb = new db();
$link = $objDb->conectar_mysql();

$sql = " INSERT INTO estabelecimento (estabelecimento, cnpj, email, telefone, endereco, numero, complemento, senha) VALUES ('$usuario', '$cnpj', '$email', '$telefone', '$endereco', '$numero', '$complemento', '$senha' ) ";



if (mysqli_query($link, $sql)){

	header("Location: home.php");

}else{
	echo "Erro ao cadastrar usuário";
}


?>