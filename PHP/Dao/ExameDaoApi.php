<?php 
use Dba\Connection;
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
        public function listaExame($linha){
            $exame = new Exame();
            //paciente_id, entrada, data_exame, data_entrega, tipo_amostra,tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id
                $exame->setId($linha['registro']);
                $exame->setPaciente($linha['paciente_id']);
                $exame->setPreceptor($linha['professor_id']);
                $exame->setResponsavel_exame($linha['aluno_id']);
                $exame->setEntrada($linha['entrada']);
                $exame->setData_exame($linha['data_exame']);
                $exame->setData_entrega($linha['data_entrega']);
                $exame->setTipo_amostra($linha['tipo_amostra']);
                $exame->setTecnica($linha['tecnica']);
                $exame->setConsistencia($linha['consistencia']);
                $exame->setColoracao($linha['coloracao']);
                $exame->setMuco($linha['muco']);
                $exame->setSangue($linha['sangue']);
               
                return $exame; 

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

        public function buscarPorId($id){
            
             $url ="http://localhost:3000/exame/".urlencode($id);
             try{
                 $response = file_get_contents($url);
            if ($response === FALSE) {
                return null; // ID não encontrado ou erro na requisição
            }
            $data = json_decode($response, true);
            if ($data) {
                return $this->listaExame($data);
            }


             }catch(Exception $e){
                echo"erro ao buscar exame por id: {$e->getMessage()}";
                return null;
             }
           
        }

        public function readAlunoId($idAluno){
           
           return 1;
        }

        public function readProfessorId($idProfessor){
             return 1;
           
        }
        
      
}

?>