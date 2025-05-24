<?php 

class exame{

    private $dataRealizacao;
    private $hora;
    private $dataPrevista;
    private $tipoAmostra;
    private $tecnicaUtilizada;
    private $consistencia;
    private $coloracao;
    private $muco;
    private $sangue;
    private $analise;

    public function __construct(){}

     public function getDataRealizacao() {
        return $this->dataRealizacao;
    }
    public function setDataRealizacao($dataRealizacao) {
        $this->dataRealizacao = $dataRealizacao;
    }

    public function getHora() {
        return $this->hora;
    }
    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getDataPrevista() {
        return $this->dataPrevista;
    }
    public function setDataPrevista($dataPrevista) {
        $this->dataPrevista = $dataPrevista;
    }

    public function getTipoAmostra() {
        return $this->tipoAmostra;
    }
    public function setTipoAmostra($tipoAmostra) {
        $this->tipoAmostra = $tipoAmostra;
    }

    public function getTecnicaUtilizada() {
        return $this->tecnicaUtilizada;
    }
    public function setTecnicaUtilizada($tecnicaUtilizada) {
        $this->tecnicaUtilizada = $tecnicaUtilizada;
    }

    public function getConsistencia() {
        return $this->consistencia;
    }
    public function setConsistencia($consistencia) {
        $this->consistencia = $consistencia;
    }

    public function getColoracao() {
        return $this->coloracao;
    }
    public function setColoracao($coloracao) {
        $this->coloracao = $coloracao;
    }

    public function getMuco() {
        return $this->muco;
    }
    public function setMuco($muco) {
        $this->muco = $muco;
    }

    public function getSangue() {
        return $this->sangue;
    }
    public function setSangue($sangue) {
        $this->sangue = $sangue;
    }

    public function getAnalise() {
        return $this->analise;
    }
    public function setAnalise($analise) {
        $this->analise = $analise;
    }

    // 🔸 Método toString
    public function __toString() {
        return "Data de Realização: {$this->dataRealizacao}, " .
               "Hora: {$this->hora}, " .
               "Data Prevista: {$this->dataPrevista}, " .
               "Tipo de Amostra: {$this->tipoAmostra}, " .
               "Técnica Utilizada: {$this->tecnicaUtilizada}, " .
               "Consistência: {$this->consistencia}, " .
               "Coloração: {$this->coloracao}, " .
               "Muco: {$this->muco}, " .
               "Sangue: {$this->sangue}, " .
               "Análise: {$this->analise}";
    }

} 

?>