<?php
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
    }

?>