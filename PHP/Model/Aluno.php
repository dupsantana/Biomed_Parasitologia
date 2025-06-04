<?php
class Aluno extends Usuario{
    private $id;
    private $rgm;

    public function __construct(){
       parent::__construct();
    }   

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getrgm() {
        return $this->rgm;
    }
    
    public function setrgm($rgm) {
        $this->rgm = $rgm;
    }

    public function __toString(){
    
        return "Rgm Aluno: {$this->rgm}". parent::__toString();
        
    }

}
?>