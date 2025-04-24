<?php

    class Usuario extends Pessoa{
        private $rgm;
        private $email;
        private $senha;

       

        public function __construct($rgm, $email, $senha){
            parent::__construct($nome);
            $this->rgm = $rgm;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function getRgm(){  
            return $this->rgm;  
        }       

        public function setRgm($rgm){
            $this->rgm = $rgm;
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