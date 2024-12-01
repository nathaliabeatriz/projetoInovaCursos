<?php include_once("visao/cabecalhoAdm.php"); ?>
<HTML>
	<HEAD>
		<TITLE> Autorização de Exclusão </TITLE>
	</HEAD>
	<BODY>
		
		<H1> Deseja excluir <?php echo $user->getNome(); ?> ?</h1>
		
		<H2 class="btnSimNao"><A href="usuario.php?fun=excluir&conf=sim&id=<?php echo $user->getId();?>"> Sim </H2> 
		
		<H2 class="btnSimNao"> <A href="usuario.php?fun=listar">Não</H2>
		
	</BODY>
</HTML>

<?php include_once("visao/rodapeAdm.php"); ?>