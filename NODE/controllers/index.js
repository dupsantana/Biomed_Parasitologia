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
const {insert,buscarPorId,deleteExame,update,readAlunos,readProfessores,readAlunoId,
    readProfessorId,readPaciente}=require("../models/DAO/ExameDao");

//CREATE DE EXAME
app.post("/exame", async(req, res) => {
  console.log("Body recebido:", req.body);
  const {paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor} = req.body; 
  const result = await insert(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor);

  
  if (!result) {
    return res.status(400).json({ success: false });
  }

return res.status(200).json({ success: true, registro: result });
     
    
});
 

//READ DE ALUNOS
app.get("/alunos", async(req, res)=>{
  const alunos = await readAlunos();
  console.log(alunos);
 if(!alunos){
  return res.status(400).json({ success: false });
 }
  
  return res.status(200).json(alunos);
    
});

//READ DE PROFESSORES
app.get("/professores", async(req,res)=>{
  const professores = await readProfessores();

  console.log(professores);
  if(!professores){
     return res.status(400).json({ success: false })
  }
  return res.status(200).json(professores);
});

//READ DE PACIENTES//
app.get("/pacientes", async(req,res)=>{
  const pacientes = await readPaciente();
  console.log(pacientes);
  if(!pacientes){
    return res.status(400).json({success : false});
  }
  return res.status(200).json(pacientes);
 
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

app.get("/exame/aluno/:id", (req,res)=>{
  const idAluno = parseInt(req.params.id);
  const simulaBanco={
  "id": 1,
  "rgmAluno": 12345678,
  "nome": "João da Silva",
  "email": "joao.silva@example.com",
  "senha": "senhaSegura123"
}
 res.status(200).json(simulaBanco);
});

app.get("/exame/professor/:id", (req,res)=>{
  const idProfessor = parseInt(req.params.id);
  const sBanco = {
  "id": 1,
  "rgmProfessor": 12345678,
  "nome": "Maria da Silva",
  "email": "maria.silva@example.com",
  "senha": "senhaSegura123"
  }
  console.log("cheguei aqui");
  res.status(200).json(sBanco);
});

app.delete("/exame/:id" , (req,res)=>{
    const deleteExame = parseInt(req.params.id);
    res.status(200).json({success: true});
});

app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});