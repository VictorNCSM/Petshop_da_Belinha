<?php


$nome=$_POST["nome"];

$nascimento=$_POST["data_nasc"];

$telefone=$_POST["telefone"];

$nome_pet = $_POST["nome_pet"];

$nasc_pet = $_POST["nasc_pet"];

$raca_pet = $_POST["raca_pet"];

$obs_pet = $_POST["observacao"];

$rua=$_POST["rua"];

$num_rua=$_POST["numero_rua"];

$bairro=$_POST["bairro"];

$complemento=$_POST["complemento"];

$cep = $_POST["cep"];

$cidade=$_POST["cidade"];

$estado=$_POST["estado"];

$email=$_POST["email"];

$senha1=$_POST["senha_user"];

$conf_senha=$_POST["senha_confirm"];

	if(isset($_POST["sessao"]))
	{
		$sessao = $_POST["sessao"];
	}
	else
	{
		$sessao = 0;
	}


	echo "<font face='Riffic Free' color='#ffb100' size=4>";

		if(strlen($telefone) < 8)
		{
			echo "O telefone inserido está incorreto <a href='cadastro.html'>Voltar para a página do formulário</a>.";
		}
		elseif(strlen($cep) < 8)
		{
			echo "O CEP inserido está incorreto <a href='cadastro.html'>Voltar para a página do formulário</a>.";
		}
		else
		{
			if(strlen($senha1) < 8)
			{
				echo "A sua senha é muito curta, ela precisa ter ao menos 8 caracteres <a href='cadastro.html'>Voltar para a página do formulário</a>. <br/>";
			}
			elseif ($senha1 != $conf_senha)
			{
				echo "As senhas não coincidem. <a href='cadastro.html'>Voltar para a página do formulário</a>.<br/>";
			}
			else
			{
				if(strpos($email,"@") == "")
				{
					echo "O e-mail inserido está incorreto <a href='cadastro1.html'>Voltar para a página do formulário</a>.<br/>";
				}
				elseif(strpos($email,".com") == "")
				{echo "O e-mail inserido está incorreto <a href='cadastro1.html'>Voltar para a página do formulário</a>. <br/>";

				}
				else
				{
					include("conexao.php");

					mysqli_query($conexao,"insert into cadastro(nome,datanasc,telefone,nomepet,nascpet,raca,obspet,rua,numendereco,bairro,complemento,cep,cidade,estado,email,senha,sessao) values('$nome','$nascimento','$telefone','$nome_pet','$nasc_pet','$raca_pet','$obs_pet','$rua','$num_rua','$bairro','$complemento','$cep','$cidade','$estado','$email','$senha1','$sessao')");
					echo "Cadastro realizado com sucesso. <a href='cadastro1.html'>Voltar para a página do formulário</a>. <br/>";
				}
			}
		}

		
		echo "</font>";	
?>