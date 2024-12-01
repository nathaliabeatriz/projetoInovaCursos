<?php
	include_once("ConnectionFactory_class.php");
	include_once("Usuario_class.php"); 
	
	class UsuarioDAO{
	
		public $con = null; 
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		//cadastrar
		public function cadastrar($user){
			try{
				$stmt = $this->con->prepare(
					"INSERT INTO usuario(nome, dataNascimento, cpf, email, telefone)
					VALUES (:nome, :dataNascimento, :cpf, :email, :telefone)");
					$stmt->bindValue(":nome", $user->getNome());
					$stmt->bindValue(":dataNascimento", $user->getDataNascimento());
					$stmt->bindValue(":cpf", $user->getCpf());
					$stmt->bindValue(":email", $user->getEmail());
					$stmt->bindValue(":telefone", $user->getTelefone());
					
					$stmt->execute(); 
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//alterar
		public function alterar($user){
			try{
				$stmt = $this->con->prepare(
					"UPDATE usuario SET nome=:nome, dataNascimento=:dataNascimento, cpf=:cpf,
					email=:email, telefone=:telefone WHERE id=:id");
					
					$stmt->bindValue(":nome", $user->getNome());
					$stmt->bindValue(":dataNascimento", $user->getDataNascimento());
					$stmt->bindValue(":cpf", $user->getCpf());
					$stmt->bindValue(":email", $user->getEmail());
					$stmt->bindValue(":telefone", $user->getTelefone());
					$stmt->bindValue(":id", $user->getId());
					
					$this->con->beginTransaction();
					$stmt->execute(); 
					$this->con->commit(); 
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//excluir
		public function excluir($user){
			try{
				$num = $this->con->exec("DELETE FROM usuario WHERE id = " . $user->getId());
				
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
					$dados = $this->con->query("SELECT * FROM usuario");
				} else {
					$dados = $this->con->query($query);
				}
				$lista = array(); 

				foreach($dados as $linha){

					$c = new Usuario();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setDataNascimento($linha["dataNascimento"]);
					$c->setCpf($linha["cpf"]);
					$c->setEmail($linha["email"]);	
					$c->setTelefone($linha["telefone"]);
						
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
				$lista = $this->con->query("SELECT * FROM usuario WHERE id = " . $id);

				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Usuario();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["nome"]);
				$c->setDataNascimento($dado[0]["dataNascimento"]);
				$c->setCpf($dado[0]["cpf"]);
				$c->setTelefone($dado[0]["telefone"]);
				$c->setEmail($dado[0]["email"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>