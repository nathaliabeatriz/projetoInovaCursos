<?php
    include_once("modelo/UsuarioDAO_class.php");
    class CadastrarUsuario{
        public function __construct(){
            if(isset($_POST["enviar"])){
                
                $c = new Usuario();
                $c->setNome($_POST["nome"]);
                $c->setDataNascimento($_POST["dataNascimento"]);
                $c->setCpf($_POST["cpf"]);
                $c->setEmail($_POST["email"]);
                $c->setTelefone($_POST["telefone"]);

                $dao = new UsuarioDAO();
                $dao->cadastrar($c);

                $status = "Cadastro de Usuário " . $c->getNome() . " efetuado com sucesso";

                $lista = $dao->listar();

               include_once("visao/listaUsuario.php");
               
            } else{
                include_once("visao/formCadastroUsuarios.php");
            }
        }
    }
?>