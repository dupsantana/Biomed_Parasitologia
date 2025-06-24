<?php 
    class AlunoDaoApi{
        public function insert(Aluno $aluno){
            $url = "http://localhost:3000/aluno"; //VARIÁVEL REFERENTE AO POST LA NA API TODAS AS INFORMAÇÕES DE ALUNO VAO PRA ESSE ENDEREÇO
            $dados = [
                //CHAVE        VALOR//
                "userName" => $aluno -> getNome(),
                "userRGM" => $aluno -> getrgmAluno(),
                "userEmail" => $aluno -> getEmail(),
                "userPassword" => $aluno -> getSenha()
            ];

            $options = [
                "http" => [
                    "header" => "Content-Type: application/json\r\n",
                    "method" => "POST",
                    "content" => json_encode($dados)
                ]
                   
            ];
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $resposta = $result ? json_decode($result,true) : false;

            if ($resposta && isset($resposta["id"])){
                return $resposta["id"];
            }else{
                echo"Erro ao cadastrar aluno!";
            }
            
        }

        public function read(){
            $url = "http://localhost:3000/alunos";
            $result = file_get_contents($url);
            $listaAluno = array();
            $lista = json_decode($result,true);

            foreach($lista as $aluno){
                $listaAluno[] = $this->AlunoLista($aluno);
            }
            return $listaAluno;
        }

        public function AlunoLista($alunoLinha){
            $aluno = new Aluno();
            $aluno -> setId(htmlspecialchars($alunoLinha['id']));
            $aluno -> setNome(htmlspecialchars($alunoLinha['nome']));
            $aluno -> setrgmAluno(htmlspecialchars($alunoLinha['rgmAluno']));
            $aluno -> setEmail(htmlspecialchars($alunoLinha['email']));
            $aluno -> setSenha(htmlspecialchars($alunoLinha['senha']));

            return $aluno;

        }
       
    }
?>
