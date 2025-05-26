<?php 
    class Pacientes{
        private $nome;
        private $dataNasc;
        private $dataExame;
        private $periodo;
        private $telefone;
        private $pacienteMail;
        private $nomeMae;
        private $epf;
        private $sangueOculto;
        private $naosolici;
        private $medicamento_sim;
        private $medicamento_nao;
        private $nome_medicamento;

        public function __construct(){}

        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getDataNasc() {
            return $this->dataNasc;
        }
        public function setDataNasc($dataNasc) {
            $this->dataNasc = $dataNasc;
        }
        public function getDataExame() {
            return $this->dataExame;
        }
        public function setDataExame($dataExame) {
            $this->dataExame = $dataExame;
        }
        public function getPeriodo() {
            return $this->periodo;
        }
        public function setPeriodo($periodo) {
            $this->periodo = $periodo;
        }
        public function getTelefone() {
            return $this->telefone;
        }
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        public function getPacienteMail() {
            return $this->pacienteMail;
        }
        public function setPacienteMail($pacienteMail) {
            $this->pacienteMail = $pacienteMail;
        }
        public function getNomeMae() {
            return $this->nomeMae;
        }
        public function setNomeMae($nomeMae) {
            $this->nomeMae = $nomeMae;
        }
        public function getEpf() {
            return $this->epf;
        }
        public function setEpf($epf) {
            $this->epf = $epf;
        }
        public function getSangueOculto() {
            return $this->sangueOculto;
        }
        public function setSangueOculto($sangueOculto) {
            $this->sangueOculto = $sangueOculto;
        }
        public function getNaoSolici() {
            return $this->naosolici;
        }
        public function setNaoSolici($naosolici) {
            $this->naosolici = $naosolici;
        }
        public function getMedicamento_sim() {
            return $this->medicamento_sim;
        }
        public function setMedicamento_sim($medicamento_sim) {
            $this->medicamento_sim = $medicamento_sim;
        }
        public function getMedicamento_nao() {
            return $this->medicamento_nao;
        }
        public function setMedicamento_nao($medicamento_nao) {
            $this->medicamento_nao = $medicamento_nao;
        }
        public function getNome_medicamento() {
            return $this->nome_medicamento;
        }
        public function setNome_medicamento($nome_medicamento) {
            $this->nome_medicamento = $nome_medicamento;
        }
        public function __toString(){
            return "Nome: {$this->nome}, Data de Nascimento: {$this->dataNasc}, Data do Exame: {$this->dataExame}, Período: {$this->periodo}, Telefone: {$this->telefone}, Email: {$this->pacienteMail}, Nome da Mãe: {$this->nomeMae}, EPF: {$this->epf}, Sangue Oculto: {$this->sangueOculto}, Não Solicitado: {$this->naosolici}, Medicamento Sim: {$this->medicamento_sim}, Medicamento Não: {$this->medicamento_nao}, Nome do Medicamento: {$this->nome_medicamento}";
        }
    }
        
        

?>