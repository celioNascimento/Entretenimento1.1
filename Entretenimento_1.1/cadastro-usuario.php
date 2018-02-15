<?php

	$erro_usuario = isset($_GET['erro_usuario'])  ?  $_GET['erro_usuario'] : 0;
	$erro_email   = isset($_GET['erro_email'])    ?  $_GET['erro_email']   : 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Cadastro - Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->

	<link rel="stylesheet" type="text/css" href="css/estilo-cadastro.css?version10">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- --------------------------------------- Barra de Navegação -------------------------------- -->

	<nav class="navbar navbar-fixed-top navbar-barra-navegacao">
		<div class="container">
			<!-- ************** header *********************-->

			<div class="navbar-header">
				
				<a href="index.php" class="navbar-brand">
					<span class="img-logo">Entretenimento</span>
				</a>

			</div>

			
		</div> <!-- ************************ /container *********************-->

		
	</nav> <!-- ************************ /nav *********************-->

	<!-- --------------------------------------- Conteúdo -------------------------------- -->

	<div class="container">		
		<div class="form-cadastro">
			<form method="post" action="registra_usuario.php" id="form_cadastra_usuario">
			<h3>Cadastra-se</h3>
			<div class="row">

				<div class="col-md-3 form-group ">
					<label for="nome">Usuário:</label>
					<input type="text" name="usuario" class="form-control" id="usuario" required="requiored">
					<div><?php 
						if ($erro_usuario){
							echo '<font style="color : #ff0000">Usuário já Cadastrado</font>';
						}else{
							echo '<font style="color : #ffffff">Usuário já Cadastrado</font>';
						}
					?></div>
				</div>

				<div class="col-md-5 form-group ">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" class="form-control" id="nome" required="requiored">
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-5 form-group  ">
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" id="email" required="requiored">
					<div><?php 
						if ($erro_email){
							echo '<font style="color : #ff0000">Email já Cadastrado</font>';
						}else{
							echo '<font style="color : #ffffff">Email já Cadastrado</font>';
						}
					?></div>
				</div>

				<div class="col-md-3 form-group">
					<label for="data_nascimento_">Data de Nascimento</label>
					<input type="date" name="data_nascimento" class="form-control" id="data_nascimento" required="requiored">
				</div>
			</div><!-- ************************ /row *********************-->


			<div class="row">
				<div class="col-md-4 form-group">
					<label for="endereco_usuario">Endereço:</label>			
					<input type="text" name="endereco_usuario" class="form-control" id="endereco_usuario" required="requiored">
				</div>

				<div class="col-md-2 form-group">
					<label for="numero_endereco_usuario">Número:</label>		
					<input type="text" name="numero_endereco_usuario" class="form-control" id="numero_endereco_usuario" required="requiored">
				</div>

				<div class="col-md-2 form-group">
					<label for="complemento_endereco_usuario">Complemento:</label>			
					<input type="text" name="complemento_endereco_usuario" class="form-control" id="complemento_endereco_usuario" required="requiored">
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-4">
					<label for="cidade">Cidade:</label>
					<input type="text" name="cidade" class="form-control" id="cidade" required="requiored">
				</div>

				<div class="col-md-4">
					<label for="estado">Estado:</label>
					<input type="text" name="estado" class="form-control" id="estado" required="requiored">
				</div>
			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-8 form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" class="form-control" id="senha" required="requiored">
				</div>
			</div><!-- ************************ /row *********************-->

			<div class="btn-cadastrar">

				<div class="row">
					<div class="col-md-2">
						<input type="submit" name="" class="btn btn-primary" value="Cadastrar">
					</div>

				</div><!-- ************************ /row *********************-->

			</div>

			</div><!-- ************************ /form-cadastro *********************-->
			</form>
		</div><!-- ************************ /container *********************-->

		<footer class="rodape-cadastro navbar-inverse">
		<div class="container">

			<div class="row">
				<div class="col-md-2">
					<span class="img-rodape">entretenimento</span>
				</div>

				<div class="col-md-2 col-md-offset-7">
					<ul class="nav navbar-nav">
						<li><a href="#">Fale conosco</a></li>
					</ul>
				</div>
			</div>

			<div class="direitos">
				<span>&copy;Todos os direitos reservados</span>
			</div>
		
		</div>				
	</footer>

	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>