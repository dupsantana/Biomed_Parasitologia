<?php

use Dba\Connection;

    class ExameDao{

        //INSERT PADRÃO DE EXAME
        public function insert(Exame $exame){
            try{
               $sql = "INSERT INTO exame(paciente_id, entrada, data_exame, data_entrega, tipo_amostra,tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id)
               VALUES (:paciente_id, :entrada, :data_exame, :data_entrega, :tipo_amostra, :tecnica, :consistencia, :coloracao, :muco, :sangue, :aluno_id, :professor_id)";
                $pdo = ConnectionFactory::getConnection();
                $conn = $pdo-> prepare($sql);
                $conn->bindValue(":paciente_id", $exame->getPaciente()); 
                $conn->bindValue(":entrada", $exame->getEntrada());
                $conn->bindValue(":data_exame", $exame->getData_exame());
                $conn->bindValue(":data_entrega", $exame->getData_entrega());
                $conn->bindValue(":tipo_amostra", $exame->getTipo_amostra());
                $conn->bindValue(":tecnica", $exame->getTecnica());
                $conn->bindValue(":consistencia", $exame->getConsistencia());
                $conn->bindValue(":coloracao", $exame->getColoracao());
                $conn->bindValue(":muco", $exame->getMuco());
                $conn->bindValue(":sangue", $exame->getSangue());
                $conn->bindValue(":aluno_id", $exame->getResponsavel_exame());
                $conn->bindValue(":professor_id", $exame->getPreceptor());


                //executa o insert
                $conn->execute();                
               
                $UltimoId = $pdo->lastInsertId();

                return $UltimoId;

            }catch(PDOException $ex){
                echo "<p> Erro </p> <p>$ex</p>";
                return null;
            }
        }     

        
        public function buscarPorId($exameId){
            $idRecebido = $exameId;

                try{
                    $sql = "SELECT * FROM exame WHERE registro = :registro ";
                    $conn = ConnectionFactory::getConnection()->prepare($sql);
                    $conn->bindValue(":registro", $idRecebido);
                    $conn->execute();
                    $resultadoBusca = $conn->fetch(PDO::FETCH_ASSOC);

                    //array vazio criado
                    $valor = array();
                    //pega apenas o valor do array criado que veio como resultado da busca do banco e guarda no array vazio
                    foreach($resultadoBusca as $chave => $value){
                        $valor[] = $value;             
                }
                //agora é setado manualmente cada valor do votor para o objeto                
                    $exameRetorno = new Exame();
                    $exameRetorno->setId($valor[0]);
                    $exameRetorno->setPaciente($valor[1]);
                    $exameRetorno->setPreceptor($valor[2]);
                    $exameRetorno->setResponsavel_exame($valor[3]);
                    $exameRetorno->setEntrada($valor[4]);
                    $exameRetorno->setData_exame($valor[5]);
                    $exameRetorno->setData_entrega($valor[6]);
                    $exameRetorno->setTipo_amostra($valor[7]);
                    $exameRetorno->setTecnica($valor[8]);
                    $exameRetorno->setConsistencia($valor[9]);
                    $exameRetorno->setColoracao($valor[10]);
                    $exameRetorno->setMuco($valor[11]);
                    $exameRetorno->setSangue($valor[12]);    

                    return $exameRetorno;
                

                }catch(PDOException $ex){
                    echo "<p>Erro ao fazer a consulta no Banco de dados". $ex->getMessage()."</p>";
                }
        }

        public function readAlunoId($idAluno){

            $idRecebido = $idAluno;

            try{
                $sql = "SELECT * FROM aluno WHERE id = :id";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn ->bindValue(":id", $idRecebido);
                $conn->execute();
                $resultado = $conn->fetch(PDO::FETCH_ASSOC);

                $valorAluno = array();

                foreach($resultado as $chave => $valor){
                    $valorAluno[]= $valor;
                }                

                $nomeAluno = $valorAluno[2];
                
                return $nomeAluno;


            }catch(PDOException $ex){
                echo "<p>Erro ao fazer a consulta no Banco de dados". $ex->getMessage()."</p>";
            }
            
            return "algo";

        }

        public function readProfessorId($idProfessor){
            
            $idRecebido = $idProfessor;
            try{
                $sql = "SELECT * FROM professor WHERE id LIKE :id";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn ->bindValue(":id", $idRecebido);
                $conn->execute();
                $resultado = $conn->fetch(PDO::FETCH_ASSOC);
                $valorProfessor = array();               

                foreach($resultado as $chave => $valor){
                    $valorProfessor[]= $valor;
                }

                $nomeProfesor = $valorProfessor[2];

                return $nomeProfesor;

            }catch(PDOException $ex){

                echo "<p>Erro ao fazer a consulta no Banco de dados". $ex->getMessage()."</p>";
            }
            return "";
        }
        
        //READ DE PACIENTE//
         public function readPaciente(Pacientes $pacientes){
            try{
                $sql = "SELECT * FROM paciente";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->execute();

                $lista = $conn->fetchAll(PDO::FETCH_ASSOC);
                $listaPaciente = array();

                foreach($lista as $linha){
                    $pacienteEncontrado = new Pacientes();
                    $pacienteEncontrado->setId($linha['id']);
                    $pacienteEncontrado->setNome($linha['nome']);
                    $listaPaciente[]= $pacienteEncontrado;
                }
                    return $listaPaciente;
                

            }catch (PDOException $ex){
                echo "<p> Erro </p> <p>$ex</p>";
            }
    } 



        //aqui é um insert com registro e nome já passados por parametro, retando assim só os restos de dados para fazer o insert corretamente
        public function insertForPesquisa(Pacientes $paciente){


        }


        public function update(Aluno $aluno, Professor $professor, Pacientes $paciente, Exame $exame){

        }
    }
     

?>