<?php include_once("visao/cabecalhoAdm.php"); ?>
        <?php
            if(isset($status)){echo "<h2>".$status."</h2>";}
            //se $status está preenchida, imprimir ela
        ?>
        <a href="usuario.php?fun=cadastrar"><div id="btnNovo">
            <img src="visao/img/icon-plus.png" alt="Ícone de adicionar novo curso">
            Novo usuário
         </div></a>
        <br><br>

        <table border="1px" class="tabelas">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>             
                <th> </th>
                <th> </th>
            </tr>

        <?php
            foreach($lista as $c){
                echo "<tr>";
                echo "<td>" . $c->getId() . "</td>";
                echo "<td><a href=usuario.php?fun=exibir&id=" . $c->getId() . ">" . $c->getNome() . "</a></td>";
                echo "<td>" . $c->getDataNascimento() . "</td>";
                echo "<td>" . $c->getCpf() . "</td>";
                echo "<td>" . $c->getEmail() . "</td>";
                echo "<td>" . $c->getTelefone() . "</td>";
                echo "<td><a href=usuario.php?fun=alterar&id=" . $c->getId() . "><img src='visao/img/update.png' width='30px'></a></td>";

                echo "<td><a href=usuario.php?fun=excluir&id=" . $c->getId() . "><img src='visao/img/delete.png' width='30px'> </a></td>";

                echo "</tr>";
            }
        ?>
        </table>

        <?php include_once("visao/rodapeAdm.php"); ?>