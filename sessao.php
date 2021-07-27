<?php

echo "<font face='Riffic Free' color='#ffb100'>";

	if(empty($_SESSION["email"]) and empty($_SESSION["senha"]))
	{
		echo "Sua sessão foi expirada. <a href='cadastro1.html>Voltar à pagina de cadastro.</a>'";
	}
	else
	{
		
		echo $_SESSION["email"]," , bem vindo!";
	}

echo "</font>";
?>