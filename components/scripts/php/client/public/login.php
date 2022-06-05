<?php

session_start();

if (!empty($_SESSION["loggedin"]))
{
	if ($_SESSION["loggedin"] == true)
	{
		print_r($_SESSION);

		header("location: ../../game/fase-1.php");
		exit;
	}
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 360px;
			padding: 20px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<h2>Login</h2>
		<p>Por favor, preencha os campos para fazer o login.</p>

		<?php
		if (!empty($login_err))
		{
			echo '<div class="alert alert-danger">' . $login_err . '</div>';
		}
		?>

		<form action="../private/login_user.php" method="POST">
			<div class="form-group">
				<label for="user">Nome do usuário</label>
				<input id="user" type="text" name="username" class="form-control ">
				<!-- <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?> -->
				<span class="invalid-feedback"><?php echo $username_err; ?></span>
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input id="senha" type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
				<span class="invalid-feedback"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Entrar">
			</div>
			<p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
		</form>
	</div>
</body>

</html>