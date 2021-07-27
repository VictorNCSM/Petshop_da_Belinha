<html>
	<head>
		<title>Petshop da Belinha - Formulário</title>
		<link rel="shortcut icon" href="imagens/cachorro.svg"/>
	</head>
	<body>
		<font face="Riffic Free" color="#ffb100" size=5>
			<h1>Formul&aacuterio para contato</h1>
			<br/>

			<form action="dados.php" method="post">

				<div>
					<label for="">Nome :</label>
					<input name="nome" required="required" placeholder="Seu nome" type="text">
				</div>

				<hr color="#0267bd"/>

				<div>
					<label for="">De qual espécie é o seu pet? :</label><br/>

					<input name="cachorro" value="cachorro" type="checkbox">Cachorro <br/>

					<input name="gato" value="gato" type="checkbox">Gato <br/>

					<input name="ave" value="ave" type="checkbox">Ave <br/>

					<input name="roedor" value="roedor" type="checkbox">Roedor <br/>
				</div>

				<hr color="#0267bd"/>

				<div>
					<label for="">Seu E-mail :</label>
					<input name="email" required="required" placeholder="Digite o seu e-mail" type="text">
				</div>

				<br/>

				<div>
					<label for="">Seu número de telefone (DDD XXXXXXXXX):</label>
					<input name="telefone" required="required" placeholder="Digite o seu telefone" type="text">
				</div> 

				<br/>

				<div>
					<label for="">Digite seu endereço :</label>
					<input name="endereco" required="required" placeholder="Digite o seu endereço" type="text">
				</div>

				<br/>

				<div>
					<label for="">Digite a sua mensagem :</label>

					<br/>
					<br/>
					<textarea name="mensagem" placeholder="Digite a mensagem desejada" required="required" cols="25" rows="5"></textarea>
				</div>

				<br/>

				Link do nosso Whatsapp:

				<font color="#0267bd">
					<a href="https://api.whatsapp.com/send?phone=5511989808390&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Estou%20interessado%20interessado%20no%20seguinte%20produto%3A%20" target="_new">clique aqui</a>.
				</font>

				<br/>
				<br/>

				<div>
					<button name="botao_enviar" type="submit">Enviar</button>
				</div>

				<br/>

				<div>
					<button name="clear" type="reset">Limpar</button>
				</div>

			</form>
		</font>	
	</body>
</html>