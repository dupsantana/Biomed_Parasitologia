<?php

require_once '../Model/Professor.php';

class ProfessorDaoApi {
    private $baseUrl;

    public function __construct($baseUrl = "http://localhost:3000") {
        // Remove trailing slash, se houver
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * Insere um novo professor via API Node.js
     * @param Professor $professor
     * @return int|false retorna ID do novo professor ou false em caso de erro
     */
    public function insert(Professor $professor) {
        $url = $this->baseUrl . "/professor";
        $dados = [
            // Nome e email conforme rota Node
            "nome"  => $professor->getNome(),
            "email" => $professor->getEmail()
        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/json\r\n",
                "method"  => "POST",
                "content" => json_encode($dados)
            ]
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);
        $resposta = $result ? json_decode($result, true) : null;

        if (isset($resposta['success']) && $resposta['success'] && isset($resposta['professor']['id'])) {
            return (int) $resposta['professor']['id'];
        }

        // Em caso de falha, opcionalmente capture mensagem de erro
        return false;
    }

    /**
     * Retorna array de objetos Professor com todos os registros
     * @return Professor[]|false
     */
    public function read() {
        $url = $this->baseUrl . "/professores";
        $result = @file_get_contents($url);
        $lista = $result ? json_decode($result, true) : null;
        if (!is_array($lista)) {
            return false;
        }

        $professores = [];
        foreach ($lista as $item) {
            $professores[] = $this->professorFromArray($item);
        }
        return $professores;
    }

    /**
     * Busca um professor por ID
     * @param int $id
     * @return Professor|false
     */
    public function readById($id) {
        $url = $this->baseUrl . "/professor/" . intval($id);
        $result = @file_get_contents($url);
        $data = $result ? json_decode($result, true) : null;
        if (!is_array($data) || !isset($data['id'])) {
            return false;
        }
        return $this->professorFromArray($data);
    }

    /**
     * Atualiza um professor existente
     * @param Professor $professor
     * @return bool
     */
    public function update(Professor $professor) {
        $url = $this->baseUrl . "/professor/" . intval($professor->getId());
        $dados = [
            "nome"  => $professor->getNome(),
            "email" => $professor->getEmail()
        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/json\r\n",
                "method"  => "PUT",
                "content" => json_encode($dados)
            ]
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);
        $resposta = $result ? json_decode($result, true) : null;
        return (isset($resposta['success']) && $resposta['success']);
    }

    /**
     * Exclui um professor por ID
     * @param int $id
     * @return bool
     */
    public function delete($id) {
        $url = $this->baseUrl . "/professor/" . intval($id);
        $options = [
            "http" => [
                "method" => "DELETE"
            ]
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);
        $resposta = $result ? json_decode($result, true) : null;
        return (isset($resposta['success']) && $resposta['success']);
    }

    /**
     * Converte array JSON em objeto Professor
     * @param array $data
     * @return Professor
     */
    private function professorFromArray(array $data) {
        $prof = new Professor();
        $prof->setId(htmlspecialchars($data['id']));
        $prof->setNome(htmlspecialchars($data['nome']));
        $prof->setEmail(htmlspecialchars($data['email']));
        return $prof;
    }
}

?>
