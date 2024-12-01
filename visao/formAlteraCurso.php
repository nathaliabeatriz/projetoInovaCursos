<HTML>
	<HEAD>
		<TITLE> Alterar Curso </TITLE>
		<META charset="UTF-8" />
        <link rel="stylesheet" href="visao/styles/style-formulario.css">
	</HEAD>
	<BODY>
		
		<H1> Alterar Curso </H1>
		
		<FORM action= "curso.php?fun=alterar" method="POST" enctype="multipart/form-data">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $curso->getId() . "'"; ?> />
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $curso->getNome() . "'"; ?> /> <br />

            <LABEL for="descricao"> Descrição: </LABEL> 
			<INPUT type="text" id="descricao" name="descricao" 
			<?php echo "value='" . $curso->getDescricao() . "'"; ?> /> <br />

            <LABEL for="instrutor"> Instrutor: </LABEL> 
			<INPUT type="text" id="instrutor" name="instrutor" 
			<?php echo "value='" . $curso->getInstrutor() . "'"; ?> /> <br />
			
			<div id="botoes">
				<INPUT type="submit" name="enviar" value="Enviar" />
				<a id="cancelar" href="curso.php?fun=listar">Cancelar</a>
			</div>
			
		</FORM>
		
	</BODY>

</HTML>