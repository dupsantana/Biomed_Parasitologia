<?php
class Aluno extends Pessoa{
    private $RGM;
    private $senha;

    public function __construct($nome, $email){
        parent::__construct($nome, $email);
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

}
?>