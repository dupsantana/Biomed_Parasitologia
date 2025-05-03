<?php

    class Usuario extends Pessoa{
        
        private $email;
        private $senha;

       

        public function __construct($nome, $email, $senha){
            parent::__construct($nome);
            $this->email = $email;
            $this->senha = $senha;
        }


        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){

            $this->senha = $senha;

        }


    
    }

    

?>