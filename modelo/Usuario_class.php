<?php

    class Usuario(){
        private &id;
        private &nome;
        private $dataNascimento;
        private &email;
        private &telefone;
    }

    public function __construct(){       
    } 
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($id){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setDataNascimento($id){
        $this->dataNascimento = $dataNascimento;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }

?>