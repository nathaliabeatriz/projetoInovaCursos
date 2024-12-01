<?php

	include_once("modelo/CursoDAO_class.php");
	
	class ExibirCurso{
	
		public function __construct(){
			
			$dao = new CursoDAO();
			$curso = $dao->exibir($_GET["id"]);
			include_once("visao/exibeCurso.php");	

		}
	}

?>
