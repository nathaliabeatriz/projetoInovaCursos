<?php
	include_once("modelo/CursoDAO_class.php");
	
	class AlterarCurso{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Curso();
				$c->setId($_POST["id"]);
                $c->setNome($_POST["nome"]);
                $c->setDescricao($_POST["descricao"]);
                $c->setInstrutor($_POST["instrutor"]);
				
				$dao = new CursoDAO();
				$dao->alterar($c);
				
				$status = "Alteração do Curso " . $c->getNome() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaCurso.php");
				
			} else{
			
				$dao = new CursoDAO();
				$curso = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraCurso.php");	
			
			}
		}
	}

?>
