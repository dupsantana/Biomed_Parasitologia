<?php
  class Professor extends Usuario{

   private $rgmProfessor;

    public function __construct($nome, $email, $senha, $rgmProfessor){
        parent::__construct($nome, $email, $senha);

        $this->rgmProfessor = $rgmProfessor;

    }

    public function getRgmProfessor(){
        return $this->rgmProfessor;
    }

    public function setRgmProfessor($rgmProfessor){

        $this->rgmProfessor = $rgmProfessor;
    }

    
  }


?>