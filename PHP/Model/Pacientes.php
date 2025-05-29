<?php 
    class Pacientes{
        private $id;
        private $nome;
        private $dataNasc;
        private $telefone;
        private $pacienteMail;
        private $nomeMae;
        private $medicamento;
        private $nome_medicamento;

        public function __construct(){}

        public function getNome() {
            return $this->nome;
        }
         public function setId($id){
        $this->id = $id;
        }
        public function getId(){
            return $this->id;
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
       public function getMedicamento() {
            return $this->medicamento;
        }
        public function setMedicamento($medicamento) {
            $this->medicamento = $medicamento;
        }

        public function getNome_medicamento() {
            return $this->nome_medicamento;
        }
        public function setNome_medicamento($nome_medicamento) {
            $this->nome_medicamento = $nome_medicamento;
        }
        public function __toString(){
            return "Nome: {$this->nome}, Data de Nascimento: {$this->dataNasc}, Telefone: {$this->telefone}, Email: {$this->pacienteMail}, Nome da Mãe: {$this->nomeMae}, Medicamento:{$this->medicamento}, Nome do Medicamento: {$this->nome_medicamento}";
        }
    }
        
        

?>