<?php
include "../../../../database/connection/connect_user.php";
session_start();

// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";
$_SESSION["loggedin"] = false;

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	// Verifique se o nome de usuário está vazio
	if (empty(trim($_POST["username"])))
	{
		$username_err = "Por favor, insira o nome de usuário.";
	}
	else
	{
		$username = trim($_POST["username"]);
	}

	// Verifique se a senha está vazia
	if (empty(trim($_POST["password"])))
	{
		$password_err = "Por favor, insira sua senha.";
	}
	else
	{
		$password = trim($_POST["password"]);
	}

	// Validar credenciais
	if (empty($username_err) && empty($password_err))
	{
		// Prepare uma declaração selecionada


		$query = "SELECT id, usuario, senha FROM users WHERE usuario = '{$username}'";

		$stmt = $pdo->query($query);
		// $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

		if ($stmt = $pdo->prepare($query))
		{
			// Definir parâmetros
			$param_username = trim($_POST["username"]);
			
			// Verifique se o nome de usuário existe, se sim, verifique a senha
			$nRows = $pdo->query($query)->fetchColumn();
			if ($nRows == 1)
			{

				$_SESSION["loggedin"] = true;

				// Redirecionar o usuário para a página de boas-vindas
				header("location: ../public/login.php");
			}
			else
			{
				// O nome de usuário não existe, exibe uma mensagem de erro genérica
				$login_err = "Nome de usuário ou senha inválidos.";
			}

			// Fechar declaração
			unset($stmt);
		}
		header("location: ../public/login.php");
	}

	// Fechar conexão

	unset($pdo);
}
