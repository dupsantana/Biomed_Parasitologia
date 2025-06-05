<?php
class Aluno extends Usuario{
    private $id;
    private $rgmAluno;

    public function __construct(){
       parent::__construct();
    }   

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getrgmAluno() {
        return $this->rgmAluno;
    }
    
    public function setrgmAluno($rgmAluno) {
        $this->rgmAluno = $rgmAluno;
    }

    public function __toString(){
    
        return "Rgm Aluno: {$this->rgmAluno}". parent::__toString();
        
    }

}
?>