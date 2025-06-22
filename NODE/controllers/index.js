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
const e = require('express');

//CREATE DE EXAME
app.post("/exame", async(req, res) => {
  console.log("Body recebido:", req.body);
  const {paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor} = req.body; 
  const result = await insert(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor);  
  if (!result) {
    return res.status(404).json({ success: false });
  }
return res.status(200).json({ success: true, registro: result });   
    
});
 

//READ DE ALUNOS
app.get("/alunos", async(req, res)=>{
  const alunos = await readAlunos();
  //console.log(alunos);
 if(!alunos){
  return res.status(404).json({ success: false });
 }  
  return res.status(200).json(alunos);    
});

//READ DE PROFESSORES
app.get("/professores", async(req,res)=>{
  const professores = await readProfessores();

  //console.log(professores);
  if(!professores){
     return res.status(404).json({ success: false })
  }
  return res.status(200).json(professores);
});

//READ DE PACIENTES//
app.get("/pacientes", async(req,res)=>{
  const pacientes = await readPaciente();
  //console.log(pacientes);
  if(!pacientes){
    return res.status(404).json({success : false});
  }
  return res.status(200).json(pacientes);
 
});
//busca exame por id//
app.get("/exame/:id", async(req, res)=>{
 const id = parseInt(req.params.id);
 const exame = await buscarPorId(id);

 console.log("exame encontrado: " + exame);
 if(!exame){
  return res.status(404).json({success : false});
 }
 return res.status(200).json(exame);
});

//busca aluno por id
app.get("/aluno/:id", async(req,res)=>{
  const idAluno = parseInt(req.params.id);
  //console.log(idAluno);
  const aluno = await readAlunoId(idAluno);

  console.log("aluno encontrado: "+ aluno);
  if(!aluno){
    return res.status(404).json({success : false});
  }
  return res.status(200).json(aluno);
});

//busca professor por id
app.get("/professor/:id", async(req,res)=>{
  const idProfessor = parseInt(req.params.id);
  const professor = await readProfessorId(idProfessor);

  console.log("professor encontrado: "+ professor);
  if(!professor){
    res.send.status(404).json({success : false});
  }
  return res.status(200).json(professor);
});

//DELETE
app.delete("/exame/:id" , async(req,res)=>{
  const idExame = parseInt(req.params.id);
  const deletar = await deleteExame(idExame);  
  if(!deletar){    
    return res.status(404).json({success : false});
  }
  return res.status(200).json({success : true});
});

//UPDATE//
app.put("/exame", async(req,res)=>{
  const {id,paciente_id,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno_id,professor_id} = req.body;
  const editar = await update(id,paciente_id,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno_id,professor_id);
  console.log(editar);
  if(!editar){
     return res.send.status(404).json({success : false});
  } 
  return res.status(200).json(editar);

});

app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});