<?php
class Aluno extends Usuario{
    private $RGM;

    public function __construct($RGM){
        parent::__construct($rgm, $email, $senha);
        $this->RGM = $RGM;
    }

    public function getRGM() {
        return $this->RGM;
    }
    public function setRGM($RGM) {
        $this->RGM = $RGM;
    }

}
?>