<?php
//session_start();

require_once 'Usuario.php';
  class Professor extends Usuario{
   private $id; 
   private $rgmProfessor;
   
    public function __construct(){
       parent::__construct();
    }   
  
     public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
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
