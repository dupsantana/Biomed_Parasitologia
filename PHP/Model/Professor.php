<?php
  class Professor extends Usuario{

   private $rgmProfessor;
   
    public function __construct(){
       parent::__construct();
    }   
  
    public function getRgmProfessor(){
        return $this->rgmProfessor;
    }

    public function setRgmProfessor($rgmProfessor){

        $this->rgmProfessor = $rgmProfessor;
    }

    public function __toString(){
    
        return "Rgm Professor: {$this->rgmProfessor}". parent::__toString();
    }

  }


?>