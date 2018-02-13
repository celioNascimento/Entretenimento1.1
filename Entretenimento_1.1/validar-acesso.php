<?php

session_start();

require_once('db.class.php');

//recupera dados dos formulários do campo de login

$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

//realiza a consulta no banco de dados

$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

$objDb = new db();
$link = $objDb->conectar_mysql();

/* ------------------- retornos do mysqli_query ------------------ */

//update -> true/false
//insert -> true/false
//select -> false - para erro/resourse - uma referência para o php
//delete -> true/false

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {

	//atribui os dados do usuário em um array
	$dados_usuario = mysqli_fetch_array($resultado_id);


//Para verificação dos dados inseridos nos formulários de login	

	if(isset($dados_usuario['usuario'])){

		$_SESSION['usuario'] = $dados_usuario['usuario'];
		$_SESSION['email'] = $dados_usuario['email'];
		
		header('Location: home.php');

	}else{
		//forçar redirecionamento para index em casa de usuário inválido passando mensagem de erro vi GET
		header('Location: index.php?erro=1');
	}

}else{

//para erros de sintaxe ou parametros errados
	echo "Erro ao executar a consulta, favor entrar em contato com administrador do site";

}


?>