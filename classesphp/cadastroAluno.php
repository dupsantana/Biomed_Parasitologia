<?php
class Aluno extends Usuario{
    private $rgm;

    public function __construct($nome, $email, $senha, $rgm){
        parent::__construct($nome, $email, $senha);
<<<<<<< Updated upstream
        $this->rgm = $rgm;
=======
        $this->RGM = $rgm;+
>>>>>>> Stashed changes
    }

    public function getrgm() {
        return $this->rgm;
    }
    public function setrgm($rgm) {
        $this->rgm = $rgm;
    }

}
?>