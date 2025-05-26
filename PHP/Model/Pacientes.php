<?php 
    class Pacientes{
        private $nome;
        private $dataNascimento;
        private $dataExame;
        private $periodo;
        private $telefone;
        private $email;
        private $nomeMae;
        private $epf;
        private $sangueoculto;
        private $naosolici;
        private $medicamento_sim;
        private $medicamento_nao;
        private $nome_medicamento;

        public function __construct(){}
        
        public function setNome($nome){
            $this->nome = $nome;
        }    
        public function getNome(){
            return $this->nome;
        }

        public function setDataNascimento($dataNasc){
            $this->dataNascimento = $dataNasc;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataExame($dataExame){
            $this->dataExame = $dataExame;
        }
        public function getDataExame(){
            return $this->dataExame;
        }

        public function setPeriodo($periodo){
            $this->periodo = $periodo;
        }
        public function getPeriodo(){
            return $this->periodo;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getTelefone(){
            return $this->telefone;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setNomeMae($nMae){
            $this->nomeMae = $nMae;
        }
        public function getNomeMae(){
           return $this->nomeMae;
        }

        public function setEpf($epf){
            $this->epf = $epf;
        }
        public function getEpf(){
            return $this->epf;
        }

        public function setSangueOculto($sangueOculto){
            $this->sangueoculto = $sangueOculto;
        }
        public function getSangueOculto(){
            return $this->sangueoculto;
        }

        public function setNaoSolicitado($naosolici){
            $this->naosolici = $naosolici;
        }
        public function getNaoSolicitado(){
            return $this->naosolici;
        }

        public function setMedicamentoSim($medicamento_sim){
            $this->medicamento_sim = $medicamento_sim;
        }
        public function getMedicamentoSim(){
            return $this->medicamento_sim;
        }

        public function setMedicamentoNao($medicamento_nao){
            $this->medicamento_nao = $medicamento_nao;
        }
        public function getMedicamentoNao(){
            return $this->medicamento_nao;
        }

        public function setNomeMedicamento($nome_medicamento){
            $this->nome_medicamento = $nome_medicamento;
        }
        public function getNomeMedicamento(){
            return $this->nome_medicamento;
        }

        public function __toString(){
            return "Nome: {$this->getNome()} | Data de Nascimento: {$this->getDataNascimento()} | Telefone: {$this->getTelefone()} | Email: {$this->getEmail()} | Nome da Mãe: {$this->getNomeMae()} | EPF: {$this->getEpf()} | Sangue Oculto: {$this->getSangueOculto()} | Não Solicitado: {$this->getNaoSolicitado()} | Medicamento Sim: {$this->getMedicamentoSim()} | Medicamento Não: {$this->getMedicamentoNao()} | Nome do Medicamento: {$this->getNomeMedicamento()}";
        }
    }

?>