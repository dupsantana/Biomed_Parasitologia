//O Express é um framework para Node.js que facilita a criação de servidores web e APIs.
// Ele permite lidar com rotas, requisições HTTP (GET, POST, etc.), respostas e muito mais de forma simples.
// Em vez de escrever tudo do zero com Node puro, o Express oferece funções prontas que economizam tempo.
// Exemplo: com poucas linhas de código, consigo criar um servidor que responde quando alguém acessa uma rota.
const express = require('express');
/*O body-parser é um middleware do Express que permite interpretar dados enviados 
por formulários HTML ou por requisições JSON. Ele é útil quando você precisa acessar
 os dados do corpo (body) de uma requisição POST, por exemplo.*/
const bodyParser =  require("body-parser");
const app = express();

//Configurando para sempre receber os dados no formato JSON
app.use(bodyParser.json());
//Encondando todos os parâmetros para JSON
app.use(bodyParser.urlencoded({extended: true}));
//Configurando o express para usar o EJS como mecanismo de renderização de views padrão

// Middleware para interpretar JSON no body
app.use(express.json());

//usado para inportar funções DAO
const {insert}=require("../models/DAO/ExameDao");

//CREATE DE EXAME
app.post("/exame", (req, res) => {
  const {paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor} = req.body; 
  const result = insert(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor);

    if(result){
      return res.status(200).json({success : true});
    }    
    return res.status(400).json({success : false});
});

//READ DE ALUNOS
app.get("/alunos", (req, res)=>{
  const aluno = req.body; 

  //simulando um banco de dados//
  const alunos = [
  { id: 1, nome: "Lucas" },
  { id: 2, nome: "Isabela" },
  { id: 3, nome: "Gabriel" },
  { id: 4, nome: "Laura" },
  { id: 5, nome: "Mateus" },
  { id: 6, nome: "Amanda" },
  { id: 7, nome: "Gustavo" },
  { id: 8, nome: "Beatriz" },
  { id: 9, nome: "Rafael" },
  { id: 10, nome: "Letícia" }
]; 
  res.json(alunos);
  
});

//READ DE PROFESSORES
app.get("/professores", (req,res)=>{
  const professor = req.body;

  //simulando um banco de dados.
  const professores = [
  { id: 1, nome: "Dr. Alberto" },
  { id: 2, nome: "Dra. Regina" },
  { id: 3, nome: "Dr. Marcelo" },
  { id: 4, nome: "Dra. Cláudia" },
  { id: 5, nome: "Dr. Eduardo" },
  { id: 6, nome: "Dra. Vanessa" },
  { id: 7, nome: "Dr. Tiago" },
  { id: 8, nome: "Dra. Patrícia" },
  { id: 9, nome: "Dr. Bruno" },
  { id: 10, nome: "Dra. Simone" }
];

  
  res.json(professores);
});

//READ DE PACIENTES//
app.get("/pacientes", (req,res)=>{
  const professor = req.body;  
  //simulando um banco de dados//
  const pacientes = [
  { id: 1, nome: "Ana Silva" },
  { id: 2, nome: "Carlos Oliveira" },
  { id: 3, nome: "Mariana Souza" },
  { id: 4, nome: "Pedro Lima" },
  { id: 5, nome: "Fernanda Costa" },
  { id: 6, nome: "João Pereira" },
  { id: 7, nome: "Juliana Martins" },
  { id: 8, nome: "Ricardo Almeida" },
  { id: 9, nome: "Patrícia Gomes" },
  { id: 10, nome: "Felipe Rocha" }
];

  res.json(pacientes);
});

app.get("/exame/:id", (req, res)=>{
 const id = parseInt(req.params.id);
 const teste = {
  "registro": 1,
  "paciente_id": 1,
  "entrada": "2025-06-19 09:30:00",
  "data_exame": "2025-06-18",
  "data_entrega": "2025-06-19",
  "tipo_amostra": "Fezes",
  "tecnica": "Flotação",
  "consistencia": "Pastosa",
  "coloracao": "Amarronzada",
  "muco": "Ausente",
  "sangue": "Presente",
  "aluno_id": 5,
  "professor_id": 2};
  
 
 res.status(200).json(teste);
});


app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});