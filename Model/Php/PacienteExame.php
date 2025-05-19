<?php 
    class PacienteExame{
        private $nome;
        private $dataNascimento;
        private $dataExame;
        private $periodo;
        private $telefone;
        private $email;
        private $nomeMae;
        private $tomaMedicamento;
        private $medicamento;

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

        public function setTomaMedicamento($tomaMed){
            $this->tomaMedicamento = $tomaMed;
        }
        public function getTomaMedicamento(){
            return $this->tomaMedicamento;
        }

        public function setMedicamento($medicamento){
            $this->medicamento = $medicamento;
        }
        public function getMedicamento(){
            return $this->medicamento;
        }

        public function __toString(){
            return "Nome: {$this->nome} Data de nascimento: {$this->dataNascimento}  Data do Exame: {$this->dataExame} Periodo: {$this->periodo} 
                    Telefone: {$this->telefone} Email: {$this->email} Nome da mãe: {$this->nomeMae} Toma Medicamento {$this->tomaMedicamento} 
                    Nome do Medicamento {$this->medicamento}";
            
        }
    }

?>