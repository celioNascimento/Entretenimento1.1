<?php

// tratamento para o caso de primeiro acesso, quando a variável erro(passada via GET) não existe
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0 ;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<title>Entretenimento</title>

	<!------------------- Folhas de estilo ------------------------ -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script type="text/javascript">
		
		$(document).ready(function (){

			var campo_vazio = false;

			//verificar se os campos de usuário e senha foram devidamente preenchidos

			$('#botao-index').click(function(){

				if ($('#login-index').val() == ''){
					$('#login-index').css({'border-color': '#A94442'});
					campo_vazio = true;
				}else{
					$('#login-index').css({'border-color': '#CCC'});
				}

				if ($('#senha-index').val() == ''){

					$('#senha-index').css({'border-color': '#A94442'});
					campo_vazio = true;
				}else{
					$('#senha-index').css({'border-color': '#CCC'});
				}

				//o return false impede o envio do formulário
				if (campo_vazio) return false; 

			});

		});

	</script>

</head>
<body>



<!-- --------------------------------------------- Barra de Navegação ---------------------------------------------------- -->

	<div class="container">

		<div class="navbar-brand img-logo">Entretenimento</div>

		<div class="row conteudo-index">

			<div class="cadastro-login">

	 			<div class="col-md-10 col-md-offset-1 login-index">
	 				
	 				<div class="form-group formulario-index">
	 					<h3>Entrar</h3>
	 					<form method="post" action="validar-acesso.php">
	 						<div class="-form-login-index">
		 						<label>Login</label>
		 						<input type="text"  id="login-index" class="form-control" name="usuario"  placeholder="Insira seu login" />
	 						</div>
	 						<div class="senha-index">
		 						<label>Senha</label>
		 						<input type="password" id="senha-index" class="form-control" name="senha"  placeholder="Insira sua senha">
	 						</div>

	 						<?php

	 							if ($erro == 1){

	 								echo "<font color='#ff0000'>Usuário e/ou senha inválido(s)</font>";
	 							}

	 						?>

	 						<div class="botao-index">
	 							<input type="submit" id="botao-index" name="botao-index" class="btn btn-primary" value="Entrar">
	 						</div>
	 					</form>
	 				</div>
	 			</div>
	 				<div class="cadastro-index">
	 					<div class="teste"><h3>Cadastre-se</h3></div>
		 					<div class="row">
		 						<div class="col-md-3 "><a href="cadastro-estabelecimento.php" class="btn btn-warning btn-custom btn-estabelecimento btn-lg">Estabelecimento</a></div></div>

		 						<div class="row">
			 					<div class="col-md-1 col-md-offset-2"> <a href="cadastro-usuario.php" class="btn btn-success btn-custom btn-lg btn-usuario">Usuário</a></div></div>

		 					</div>
		 			</div>				
				
 			</div>
	    </div>

	</div><!-- ***************** /container *********************-->


	<footer class="rodape-index">
		
				<span>&copy;Todos os direitos reservados</span>
		
	</footer>


</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script language="JavaScript" src="bootstrap/js/bootstrap.min.js"></script>

</html>
