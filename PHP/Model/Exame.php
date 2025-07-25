<?php 

class exame{
    private $id;
    private $paciente;
    private $responsavel_exame;
    private $preceptor;    
    private $entrada;
    private $data_exame;
    private $data_entrega;
    private $tipo_amostra;
    private $tecnica;
    private $consistencia;
    private $coloracao;
    private $muco;
    private $sangue;
    

    public function __construct(){}

   
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getPaciente() {
        return $this->paciente;
    }
    public function setPaciente($paciente) {
        $this->paciente = $paciente;
    }
    
    public function getEntrada() {
        return $this->entrada;
    }
    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    public function getData_exame() {
        return $this->data_exame;
    }
    public function setData_exame($data_exame) {
        $this->data_exame = $data_exame;
    }
    public function getData_entrega() {
        return $this->data_entrega;
    }
    public function setData_entrega($data_entrega) {
        $this->data_entrega = $data_entrega;
    }
    public function getTipo_amostra() {
        return $this->tipo_amostra;
    }
    public function setTipo_amostra($tipo_amostra) {
        $this->tipo_amostra = $tipo_amostra;
    }
    public function getTecnica() {
        return $this->tecnica;
    }
    public function setTecnica($tecnica) {
        $this->tecnica = $tecnica;
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
    public function getResponsavel_exame() {
        return $this->responsavel_exame;
    }
    public function setResponsavel_exame($responsavel_exame) {
        $this->responsavel_exame = $responsavel_exame;
    }
    public function getPreceptor() {
        return $this->preceptor;
    }
    public function setPreceptor($preceptor) {
        $this->preceptor = $preceptor;
    }
    public function __toString(){
        return "Id: {$this->id} , Paciente: {$this->paciente}, Entrada: {$this->entrada}, Data do Exame: {$this->data_exame}, Data de Entrega: {$this->data_entrega}, Tipo de Amostra: {$this->tipo_amostra}, Técnica: {$this->tecnica}, Consistência: {$this->consistencia}, Coloração: {$this->coloracao}, Muco: {$this->muco}, Sangue: {$this->sangue}, Responsável pelo Exame: {$this->responsavel_exame}, Preceptor Responsável: {$this->preceptor}";
    }
    

} 

?>