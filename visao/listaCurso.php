<?php include_once("visao/cabecalhoAdm.php"); ?>
        <?php
            if(isset($status)){echo "<h2>".$status."</h2>";}
            //se $status está preenchida, imprimir ela
        ?>
            <div class="div-busca">
                <a href="curso.php?fun=cadastrar">
                <div id="btnNovo">
                    <img src="visao/img/icon-plus.png" alt="Ícone de adicionar novo curso">
                    Novo curso
                </div></a>
                <div id="campoBuscar">
                    <input type="text" placeholder="Buscar conteúdo... ">
                    <img src="visao/img/icon-search.png" alt="Lupa">
                </div>
            </div>

            <div id="topicos">
                <div>
                    <p>Mais vendidos</p>
                    <img src="visao/img/fogo.png" class="tpcImg">

                </div>
                <div>
                    <p>Mais acessados</p>
                    <img src="visao/img/senha.png">
                </div>
                <div>
                    <p>Fórum</p>
                    <img src="visao/img/forum.png">
                </div>
                <div>
                    <p>Cadastros</p>
                    <img src="visao/img/cadastro.png">
                </div>
            </div>

            <div>
                <table class="tabelas">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Instrutor(a)</th>          
                        <th> </th>
                        <th> </th>
                    </tr>
                    <?php
                        foreach($lista as $c){
                            echo "<tr>";
                            echo "<td>" . $c->getId() . "</td>";
                            echo "<td><a href=curso.php?fun=exibir&id=" . $c->getId() . ">" . $c->getNome() . "</a></td>";
                            echo "<td>" . $c->getDescricao() . "</td>";
                            echo "<td>" . $c->getInstrutor() . "</td>";
                            echo "<td><a href=curso.php?fun=alterar&id=" . $c->getId() . "><img src='visao/img/update.png' width='30px'></a></td>";

                            echo "<td><a href=curso.php?fun=excluir&id=" . $c->getId() . "><img src='visao/img/delete.png' width='30px'> </a></td>";

                            echo "</tr>";
                        }
                    ?>
                </table>

                <div class="sequence-pages">
                    <img src="visao/img/arrowLeft.png">
                    <div id="pag-atual">1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <img src="visao/img/arrowRight.png">
                </div>
            </div>

            <?php include_once("visao/rodapeAdm.php"); ?>