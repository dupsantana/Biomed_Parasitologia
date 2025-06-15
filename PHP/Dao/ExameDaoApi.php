<?php 
class ExameDaoApi{
    //INSERT
     public function insert(Exame $exame){
        $url = "http://localhost:3000/exame";
        //paciente_id, entrada, data_exame, data_entrega, tipo_amostra,tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id
        
        $dados = [
            "paciente_id" => $exame->getPaciente(),
            "entrada" => $exame->getEntrada(),
            "data_exame"=> $exame->getData_exame(),
            "data_entrega" => $exame->getData_entrega(),
            "tipo_amostra" => $exame->getTipo_amostra(),
            "tecnica" => $exame->getTecnica(),
            "consistencia"=> $exame->getConsistencia(),
            "coloracao" => $exame->getColoracao(),
            "muco" => $exame->getMuco(),
            "sangue" => $exame->getSangue(),
            "aluno_id" => $exame->getResponsavel_exame(),
            "professor_id" => $exame->getPreceptor()
        ];

        $options = [
            "http"=>[
                "header" => "Content-Type: application/json\r\n",
                "method" => "POST",
                "content" => json_encode($dados)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result ? json_decode($result, true) : false;
        
        }    

    //TODOS OS READS//
        public function listaProfessor($linha){
            $professor = new Professor();
            $professor ->setId(htmlspecialchars($linha['id']));
            $professor->setNome(htmlspecialchars($linha['nome']));          
            return $professor;
        }

        public function listaAluno($linha){
            $aluno = new Aluno();
            $aluno ->setId(htmlspecialchars($linha['id']));
            $aluno->setNome(htmlspecialchars($linha['nome']));
           
            return $aluno;
        }

        public function listaPaciente($linha){
            $paciente = new Pacientes();
            $paciente->setId(htmlspecialchars($linha['id']));
            $paciente->setNome(htmlspecialchars($linha['nome']));
            return $paciente;
        }

        public function readAluno(){
            $url = "http://localhost:3000/alunos";
                $result = file_get_contents($url);
                $alunoList = array();
                $lista = json_decode($result, true);

                foreach ($lista as $aluno){
                    $alunoList[] = $this->listaAluno($aluno);
                }
                return $alunoList;

        }

        public function readProfessor(){
             $url = "http://localhost:3000/professores";
                $result = file_get_contents($url);
                $professorList = array();
                $lista = json_decode($result, true);

                foreach ($lista as $professor){
                    $professorList[] = $this->listaProfessor($professor);
                }
                return $professorList;
        }

          //READ DE PACIENTE//
         public function readPaciente(){
            $url = "http://localhost:3000/pacientes";
            $result = file_get_contents($url);
            $pacienteList = array();
            $lista = json_decode($result, true);

            foreach($lista as $paciente){
                $pacienteList[] = $this->listaPaciente($paciente);
            }
            return $pacienteList;
        } 

        public function readAlunoId($idAluno){
         
           
        }

        public function readProfessorId($idProfessor){
            
           
        }
        
      
}

?>