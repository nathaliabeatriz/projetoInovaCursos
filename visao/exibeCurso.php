<?php include_once("visao/cabecalhoAdm.php"); ?>
    <HTML>

        <HEAD>
            <TITLE><?php echo $curso->getNome(); ?> </TITLE>
        </HEAD>

        <BODY>
            
            <div id="exibir">
                <H1> Curso <?php echo $curso->getNome(); ?> </H1><br>
                <UL>
                    <LI>Nome: <?php echo $curso->getNome(); ?></LI><br>
                    <LI>Descrição: <?php echo $curso->getDescricao(); ?></LI><br>
                    <LI>Instrutor(a): <?php echo $curso->getInstrutor(); ?></LI><br>
                </UL>
                
                <A id="btn-voltar" href="curso.php?fun=listar"> Voltar </A>
            </div>
            
        </BODY>
        
    </HTML>
<?php include_once("visao/rodapeAdm.php"); ?>