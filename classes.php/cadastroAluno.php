<?php
class Aluno extends {
    private $userRGM;
    private $senha;
    private $email;


    public function __construct($userRGM, $senha, $email){
        parent::__construct($nome);
        $this->userRGM = $userRGM;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getUserRGM() {
        return $this->userRGM;
    }
    public function setRGM($userRGM) {
        $this->userRGM = $userRGM;
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