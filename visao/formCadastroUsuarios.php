<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="visao/styles/style-formulario.css">
</head>
<body>
	<aside>

		<H1> Cadastro de Usuário</H1>
			
			<FORM action="usuario.php?fun=cadastrar" method="POST" 
			enctype="multipart/form-data">
				
				<LABEL for="nome"> Nome: </LABEL> 
				<INPUT type="text" id="nome" name="nome" placeholder="Nome e sobrenome"/> <br />
				
				<LABEL for="dataNascimento"> Data de Nascimento: </LABEL> 
				<INPUT type="text" id="dataNascimento" name="dataNascimento" placeholder="xx/xx/xxxx" /> <br />

				<LABEL for="email"> CPF: </LABEL> 
				<INPUT type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" /> <br />

				<LABEL for="email"> Email: </LABEL> 
				<INPUT type="text" id="email" name="email" placeholder="meuemail@email.com" /> <br />
				
				<LABEL for="tel"> Telefone: </LABEL> 
				<INPUT type="text" id="tel" name="telefone" placeholder="(xx)xxxxx-xxxx"/> <br />
				
				<div id="botoes">
					<INPUT type="submit" name="enviar" value="Enviar" />
					<a id="cancelar" href="usuario.php?fun=listar">Cancelar</a>
				</div>
			</FORM>
			<br><br>
	</aside>

</body>
</html>



