<?php
    include_once("modelo/CursoDAO_class.php");
    class CadastrarCurso{
        public function __construct(){
            if(isset($_POST["enviar"])){
                
                $c = new Curso();
                $c->setNome($_POST["nome"]);
                $c->setDescricao($_POST["descricao"]);
                $c->setInstrutor($_POST["instrutor"]);

                $dao = new CursoDAO();
                $dao->cadastrar($c);

                $status = "Cadastro de Curso " . $c->getNome() . " efetuado com sucesso";

                $lista = $dao->listar();

               include_once("visao/listaCurso.php");
               
            } else{
                include_once("visao/formCadastroCurso.php");
            }
        }
    }
?>