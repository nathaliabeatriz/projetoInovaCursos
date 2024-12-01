<?php

    class Curso{
        private $id;
        private $nome;
        private $descricao;
        private $instrutor;
    
        public function __construct(){       
        } 
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setInstrutor($instrutor){
            $this->instrutor = $instrutor;
        }
        public function getInstrutor(){
            return $this->instrutor;
        }
    }
?>