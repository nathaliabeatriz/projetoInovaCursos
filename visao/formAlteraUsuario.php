<HTML>
	<HEAD>
		<TITLE> Alterar Usuario </TITLE>
		<META charset="UTF-8" />
        <link rel="stylesheet" href="visao/styles/style-formulario.css">
	</HEAD>
	<BODY>
		
		<H1> Alterar Usuário </H1>
		
		<FORM action= "usuario.php?fun=alterar" method="POST" enctype="multipart/form-data">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $user->getId() . "'"; ?> />
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $user->getNome() . "'"; ?> /> <br />

            <LABEL for="dataNascimento"> Data de Nascimento: </LABEL> 
			<INPUT type="text" id="dataNascimento" name="dataNascimento" 
			<?php echo "value='" . $user->getDataNascimento() . "'"; ?> /> <br />

            <LABEL for="cpf"> Cpf: </LABEL> 
			<INPUT type="text" id="cpf" name="cpf" 
			<?php echo "value='" . $user->getCpf() . "'"; ?> /> <br />
			
			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" id="email" name="email" 
			<?php echo "value='" . $user->getEmail() . "'"; ?>/> <br />
			
			<LABEL for="tel"> Telefone: </LABEL> 
			<INPUT type="text" id="tel" name="telefone" 
			<?php echo "value='" . $user->getTelefone() . "'"; ?>/> <br />
			
			<div id="botoes">
				<INPUT type="submit" name="enviar" value="Enviar" />
				<a id="cancelar" href="usuario.php?fun=listar">Cancelar</a>
			</div>
			
		</FORM>
		
	</BODY>

</HTML>