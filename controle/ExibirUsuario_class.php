<?php

	include_once("modelo/UsuarioDAO_class.php");
	
	class ExibirUsuario{
	
		public function __construct(){
			
			$dao = new UsuarioDAO();
			$user = $dao->exibir($_GET["id"]);
			include_once("visao/exibeUsuario.php");	
			
		}
	}

?>
