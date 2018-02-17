<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Cadastro - Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->

	<link rel="stylesheet" type="text/css" href="css/estilo-cadastro.css">
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

	<nav class="navbar navbar-fixed-top  navbar-barra-navegacao">
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
		<div class="conteudo">
			<form method="post" action="registra-estabelecimento.php">
			<h3>Cadastra-se</h3>
			<div class="row">
				<div class="col-md-5 form-group ">
					<label for="estabelecimento">Nome do estabelecimento: </label>
					<input type="text" name="estabelecimento" class="form-control" id="estabelecimento" required="required">
				</div>

				<div class="col-md-3 form-group ">
					<label for="tipo">Tipo: </label>
					<select name="tipo" class="form-control"> 
						<option>Bar</option>
						<option>Boate</option>
						<option>Cinema</option>
						<option>Pub</option>
					</select>
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">

				<div class="col-md-4 form-group ">
					<label for="cnpj">Usuário: </label>
					<input type="text" name="usuario" class="form-control" id="usuario" required="required">
				</div>

				<div class="col-md-4 form-group ">
					<label for="cnpj">CNPJ: </label>
					<input type="text" name="cnpj" class="form-control" id="cnpj" required="required">
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-5 form-group  ">
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" id="email" required="required">
				</div>

				<div class="col-md-3 form-group">
					<label for="telefone">Telefone: </label>
					<input type="text" name="telefone" class="form-control" id="telefone" required="required">
				</div>
			</div><!-- ************************ /row *********************-->


			<div class="row">
				<div class="col-md-4 form-group">
					<label for="endereco">Endereço:</label>			
					<input type="text" name="endereco" class="form-control" id="endereco" required="required">
				</div>

				<div class="col-md-2 form-group">
					<label for="numero">Número:</label>			
					<input type="text" name="numero" class="form-control" id="numero" required="required">
				</div>

				<div class="col-md-2 form-group">
					<label for="complemento">Complemento:</label>			
					<input type="text" name="complemento" class="form-control" id="complemento" required="required">
				</div>

			</div><!-- ************************ /row *********************-->

			<div class="row">
				<div class="col-md-8 form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" class="form-control" id="senha" required="required">
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
				<span>&copy;Todos os direitos reservados</span>
			</div>
		</footer>

	
	

</body>
</html>