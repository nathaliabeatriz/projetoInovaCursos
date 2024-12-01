<?php
	include_once("modelo/CursoDAO_class.php");
	
	class ListarCurso{
	
		public function __construct(){
			$dao = new CursoDAO();
			$lista = $dao->listar();
			
			include_once("visao/listaCurso.php");		
		}
	}
?>