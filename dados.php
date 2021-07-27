<?php

	include("conexao.php");

	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$telefone=$_POST["telefone"];
	$endereco=$_POST["endereco"];
	$mensagem=$_POST["mensagem"];

	echo "<font face='Riffic Free' color='#ffb100' size=4>";

		if(isset($_POST["cachorro"]))
		{
			$pet_1 = $_POST["cachorro"];
		}
		else
		{
			$pet_1 = 0;
		}


		if(isset($_POST["gato"]))
		{
			$pet_2 = $_POST["gato"];
		}
		else
		{
			$pet_2 = 0;
		}

		if(isset($_POST["ave"]))
		{
			$pet_3 = $_POST["ave"];
		}
		else
		{
			$pet_3 = 0;
		}

		if(isset($_POST["roedor"]))
		{
			$pet_4 = $_POST["roedor"];
		}
		else
		{
			$pet_4 = 0;
		}



		if(strpos($email,"@") == "")
		{
			echo "O E-mail inserido não é um e-mail válido. <a href='formulario.php'>Voltar ao formulário</a>.";
		}
		elseif(strpos($email,".com") == "")
		{
			echo "O E-mail inserido não é um e-mail válido. <a href='formulario.php'>Voltar ao formulário</a>.";
		}
		elseif(strlen($telefone) < 8)
		{
			echo "O telefone inserido está incorreto. <a href='formulario.php'>Voltar ao formulário</a>.";
		}
		else
		{
			mysqli_query($conexao,"insert into contato(nome,pet1,pet2,pet3,pet4,email,telefone,endereco,mensagem) values('$nome','$pet_1','$pet_2','$pet_3','$pet_4','$email','$telefone','$endereco','$mensagem')");

			echo "Formulário enviado com sucesso. <a href='formulario.php'>Voltar ao formulário</a>.";

		}
	echo "</font>";
?>