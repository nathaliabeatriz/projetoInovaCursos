<?php
	include_once("ConnectionFactory_class.php");
	include_once("Curso_class.php"); 
	
	class CursoDAO{
	
		public $con = null; 
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		//cadastrar
		public function cadastrar($curso){
			try{
				$stmt = $this->con->prepare(
					"INSERT INTO curso(nome, descricao, instrutor)
					VALUES (:nome, :descricao, :instrutor)");
					$stmt->bindValue(":nome", $curso->getNome());
					$stmt->bindValue(":descricao", $curso->getDescricao());
					$stmt->bindValue(":instrutor", $curso->getInstrutor());
					
					$stmt->execute(); 
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//alterar
		public function alterar($curso){
			try{
				$stmt = $this->con->prepare(
					"UPDATE curso SET nome=:nome, descricao=:descricao, instrutor=:instrutor WHERE id=:id");
					
					$stmt->bindValue(":nome", $curso->getNome());
					$stmt->bindValue(":descricao", $curso->getDescricao());
					$stmt->bindValue(":instrutor", $curso->getInstrutor());
					$stmt->bindValue(":id", $curso->getId());
					
					$this->con->beginTransaction();
					$stmt->execute(); 
					$this->con->commit(); 
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//excluir
		public function excluir($curso){
			try{
				$num = $this->con->exec("DELETE FROM curso WHERE id = " . $curso->getId());
				
				if($num >= 1){
					return 1;
				} else {
					return 0;
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
	
		//listar
		public function listar($query = null){		

			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM curso");
				} else {
					$dados = $this->con->query($query);
				}
				$lista = array(); 

				foreach($dados as $linha){

					$c = new curso();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setDescricao($linha["descricao"]);
					$c->setInstrutor($linha["instrutor"]);
						
					$lista[] = $c;
				}
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM curso WHERE id = " . $id);

				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Curso();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["nome"]);
				$c->setDescricao($dado[0]["descricao"]);
				$c->setInstrutor($dado[0]["instrutor"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}

?>