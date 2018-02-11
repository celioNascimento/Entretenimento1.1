<?php 

require_once('db.class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$endereco_usuario = $_POST['endereco_usuario'];
$numero_endereco_usuario = $_POST['numero_endereco_usuario'];
$complemento_endereco_usuario = $_POST['complemento_endereco_usuario'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$senha = $_POST['senha'];

$objDb = new db();
$link = $objDb->conectar_mysql();

$sql = " INSERT INTO usuarios(usuario , email , data_nascimento , endereco , numero_endereco, complemento_endereco , cidade , estado , senha ) VALUES ('$usuario' , '$email' , '$data_nascimento' , '$endereco_usuario' , $numero_endereco_usuario , '$complemento_endereco_usuario' , '$cidade' , '$estado' , '$senha') ";

var_dump($sql);

mysqli_query($link, $sql);


?>