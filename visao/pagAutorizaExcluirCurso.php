<?php include_once("visao/cabecalhoAdm.php"); ?>
<HTML>
	<HEAD>
		<TITLE> Autorização de Exclusão </TITLE>
	</HEAD>
	<BODY>
		
		<H1> Deseja excluir <?php echo $curso->getNome(); ?> ?</h1>
		
		<H2 class="btnSimNao"><A href="curso.php?fun=excluir&conf=sim&id=<?php echo $curso->getId();?>"> Sim </H2> 
		
		<H2 class="btnSimNao"> <A href="curso.php?fun=listar">Não</H2>
		
	</BODY>
</HTML>

<?php include_once("visao/rodapeAdm.php"); ?>