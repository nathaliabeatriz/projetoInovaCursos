<?php
	include_once("modelo/UsuarioDAO_class.php");
	
	class AlterarUsuario{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Usuario();
				$c->setId($_POST["id"]);
                $c->setNome($_POST["nome"]);
                $c->setDataNascimento($_POST["dataNascimento"]);
                $c->setCpf($_POST["cpf"]);
                $c->setEmail($_POST["email"]);
                $c->setTelefone($_POST["telefone"]);
				
				$dao = new UsuarioDAO();
				$dao->alterar($c);
				
				$status = "Alteração do Usuário " . $c->getNome() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaUsuario.php");
				
			} else{
			
				$dao = new UsuarioDAO();
				$user = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraUsuario.php");	
			
			}
		}
	}

?>
