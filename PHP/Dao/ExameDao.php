<?php

use Dba\Connection;

    class ExameDao{

        public function insert(Exame $exame){
            try{
                $sql = "INSERT INTO exame(registro, nome_paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, responsavel_exame, preceptor) 
                        VALUES(:registro, :nome_paciente, :entrada, :data_exame, :data_entrega, :tipo_amostra, :tecnica, :consistencia, :coloracao, :muco, :sangue, :responsavel_exame, :preceptor)";
                $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":registro", $exame->getRegistro());
                $conn->bindValue(":nome_paciente", $exame->getNome_paciente());
                $conn->bindValue(":entrada", $exame->getEntrada());
                $conn->bindValue(":data_exame", $exame->getData_exame());
                $conn->bindValue(":data_entrega", $exame->getData_entrega());
                $conn->bindValue(":tipo_amostra", $exame->getTipo_amostra());
                $conn->bindValue(":tecnica", $exame->getTecnica());
                $conn->bindValue(":consistencia", $exame->getConsistencia());
                $conn->bindValue(":coloracao", $exame->getColoracao());
                $conn->bindValue(":muco", $exame->getMuco());
                $conn->bindValue(":sangue", $exame->getSangue());
                $conn->bindValue(":responsavel_exame", $exame->getResponsavel_exame());
                $conn->bindValue(":preceptor", $exame->getPreceptor());

                //executa o insert
                return $conn->execute();

            }catch(PDOException $ex){
                echo "<p> Erro </p> <p>$ex</p>";
            }
        }

       /* public function readPacienteForExame(Pacientes $pacientes){

            try{
                $sql = "SELECT *FROM paciente WHERE nome LIKE :nome";
                $conn =ConnectionFactory::getConnection()->prepare($sql);
                //prepara o nome para buscar no manco de dados
                $nome = "%" . $pacientes->getNome() . "%";
                //faz o parametro
                $conn->bindParam(":nome",$nome);
                $conn->execute();//executa o comando finalmente
                $resultadoBusca = $conn->fetchAll(PDO::FETCH_ASSOC);
                //cria um array vazio
                $lista = [];
                //pega o resultado e transforma em um objeto//
                foreach($resultadoBusca as $linha){
                    $pacienteLinha = new Pacientes();
                    $pacienteLinha->setId($linha['id']);
                    $pacienteLinha->setNome($linha['nome']);
                    $pacienteLinha->setPacienteMail(['pacienteMail']);
                    $lista[] = $pacienteLinha;
                }
                return $lista;

                
            }catch(PDOException $ex){

                echo "<p>Erro ao fazer a consulta no Banco de dados". $ex->getMessage()."</p>";

            }
        }*/

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