<?php

	include_once("modelo/CursoDAO_class.php");
	
	class ExcluirCurso{
	
		public function __construct(){
			
			if(isset($_GET["conf"])){
			
				if($_GET["conf"] == "sim"){
				
					$dao = new CursoDAO();
					$curso = $dao->exibir($_GET["id"]);
					$dao->excluir($curso);
					$status = "O curso " . $curso->getNome() . " foi excluído com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaCurso.php");
				}
			} else{
			
				$dao = new CursoDAO();
				$curso = $dao->exibir($_GET["id"]);
				include_once("visao/pagAutorizaExcluirCurso.php");	
			
			}
		}
	}

?>
