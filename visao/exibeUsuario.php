<?php include_once("visao/cabecalhoAdm.php"); ?>
    <HTML>

        <HEAD>
            <TITLE><?php echo $user->getNome(); ?> </TITLE>
        </HEAD>

        <BODY>
            
            <div id="exibir">
                <H1> Usuário <?php echo $user->getNome(); ?> </H1><br>
                <UL>
                    <LI>Nome: <?php echo $user->getNome(); ?></LI><br>
                    <LI>Data de Nascimento: <?php echo $user->getDataNascimento(); ?></LI><br>
                    <LI>CPF: <?php echo $user->getCpf(); ?></LI><br>
                    <LI>Telefone: <?php echo $user->getTelefone(); ?></LI><br>
                    <LI>E-mail: <?php echo $user->getEmail(); ?></LI><br>
                </UL>
                
                <A id="btn-voltar" href="usuario.php?fun=listar"> Voltar </A>
            </div>
            
        </BODY>
        
    </HTML>
<?php include_once("visao/rodapeAdm.php"); ?>