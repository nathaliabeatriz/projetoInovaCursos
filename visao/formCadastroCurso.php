<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de curso</title>
	<link rel="stylesheet" href="visao/styles/style-formulario.css">
</head>
<body>
	<aside>

		<H1> Cadastro de Curso</H1>
			
			<FORM action="curso.php?fun=cadastrar" method="POST" 
			enctype="multipart/form-data">
				
				<LABEL for="nome"> Nome: </LABEL> 
				<INPUT type="text" id="nome" name="nome" placeholder="Nome do curso"/> <br />
				
				<LABEL for="descricao"> Descrição </LABEL> 
				<INPUT type="text" id="descricao" name="descricao" placeholder="Descrição do curso" /> <br />

				<LABEL for="instrutor"> CPF: </LABEL> 
				<INPUT type="text" id="instrutor" name="instrutor" placeholder="Nome do(a) instrutor(a)" /> <br />
				
				<div id="botoes">
					<INPUT type="submit" name="enviar" value="Enviar" />
					<a id="cancelar" href="curso.php?fun=listar">Cancelar</a>
				</div>
			</FORM>
			<br><br>
	</aside>

</body>
</html>



