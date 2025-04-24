<?php
class Aluno extends Pessoa{
    private $RGM;
    private $senha;
    private $email;


    public function __construct($nome){
        parent::__construct($nome);
        $this->RGM = $RGM;
        $this->senha = $senha;
    }

    public function getRGM() {
        return $this->RGM;
    }
    public function setRGM($RGM) {
        $this->RGM = $RGM;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getEmail(){
        return $this-> email:
    }
    public function setEmail($email){
        $this-> email = $email;
    }

}
?>