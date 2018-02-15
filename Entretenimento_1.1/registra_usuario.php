<?php 

require_once('db.class.php');

$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
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

$usuario_existe = false;
$email_existe = false;

//verificar se o usuário já existe 

$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario'  ";
if( $resultado_id = mysqli_query($link,$sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_usuario['usuario'])){
		$usuario_existe = true;
	}


}else{
	echo 'Erro ao tentar localizar o registro do email';
}


//verificar se o email já existe no banco de dados

$sql = " SELECT * FROM usuarios WHERE email = '$email'  ";
if( $resultado_id = mysqli_query($link,$sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	
	if(isset($dados_usuario['email'])){
		$email_existe = true;
	}

}else{
	echo 'Erro ao tentar localizar o registro do usuário';
}

if ($usuario_existe || $email_existe){

	$retorno_get = '';

	if($usuario_existe){

		$retorno_get.="erro_usuario=1&";

	}

	if ($email_existe){

		$retorno_get .="erro_email=1&";

	}

	header('Location: cadastro-usuario.php?'.$retorno_get);

	die();
}


$sql = " INSERT INTO usuarios(usuario , nome, email , data_nascimento , endereco , numero_endereco, complemento_endereco , cidade , estado , senha ) VALUES ('$usuario' , '$nome','$email' , '$data_nascimento' , '$endereco_usuario' , $numero_endereco_usuario , '$complemento_endereco_usuario' , '$cidade' , '$estado' , '$senha') ";



if (mysqli_query($link, $sql)){

	header("Location: home.php");

}else{
	echo "Erro ao cadastrar usuário";
}


?>