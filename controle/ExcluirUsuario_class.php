<?php

	include_once("modelo/UsuarioDAO_class.php");
	
	class ExcluirUsuario{
	
		public function __construct(){
			
			if(isset($_GET["conf"])){
			
				if($_GET["conf"] == "sim"){
				
					$dao = new UsuarioDAO();
					$user = $dao->exibir($_GET["id"]);
					$dao->excluir($user);
					$status = "O usuário " . $user->getNome() . " foi excluído com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaUsuario.php");
				}
			} else{
			
				$dao = new UsuarioDAO();
				$user = $dao->exibir($_GET["id"]);
				include_once("visao/pagAutorizaExcluirUsuario.php");	
			
			}
		}
	}

?>
