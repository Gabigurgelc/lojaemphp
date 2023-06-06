<?php
if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Verifica se o email já está cadastrado
   // $result = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$email'");
    //if(mysqli_num_rows($result) > 0) {
      //  echo "Email já cadastrado";
        //exit;
    //}

    // Insere os dados no banco
    $result = mysqli_query($conexao, "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')");
    //if($result) {
    //  echo "Cadastro realizado com sucesso";
    //} else {
    //    echo "Erro ao cadastrar usuário";
    //}
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="main.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
		
		body {
			font-family: 'Inter', sans-serif;
			margin: 0;
			padding: 0;
			color: #1d2631;
		}

		.page {
			display: flex;
			flex-direction: column;
			align-items: center;
			align-content: center;
			justify-content: center;
			width: 100%;
			height: 100vh;
			background-color: #F0F8FF;
		}

		.formLogin {
			display: flex;
			flex-direction: column;
			background-color: #fff;
			border-radius: 7px;
			padding: 40px;
			box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
			gap: 5px
		}

		.areaLogin img {
			width: 420px;
		}

		.formLogin h1 {
			padding: 0;
			margin: 0;
			font-weight: 500;
			font-size: 2.3em;
		}

		.formLogin p {
			display: inline-block;
			font-size: 14px;
			color: #1d2631;
			margin-bottom: 25px;
		}

		.formLogin input {
			padding: 15px;
			font-size: 14px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			margin-top: 5px;
			border-radius: 4px;
			transition: all linear 160ms;
			outline: none;
		}


		.formLogin input:focus {
			border: 1px solid #1d2631;
		}

		.formLogin label {
			font-size: 14px;
			font-weight: 600;
		}

		.formLogin a {
			display: inline-block;
			margin-bottom: 20px;
			font-size: 13px;
			color: #555;
			transition: all linear 160ms;
		}

		.formLogin a:hover {
			color: #1d2631;
		}

		.btn {
			background-color: #1d2631;
			color: #fff;
			font-size: 14px;
			font-weight: 600;
			border: none !important;
			transition: all linear 160ms;
			cursor: pointer;
			margin: 0 !important;

		}

		.btn:hover {
			transform: scale(1.05);
			background-color: #1d2631;

		}
	</style>
</head>
<body>
    <div class="page">
        <form method="POST" action="cadastro.php" class="formLogin">
            <h1>Cadastro</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome completo" autofocus="true" />
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" />
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <input type="submit" name="submit" value="Acessar" class="btn" />
        </form>
    </div>
</body>
</html>