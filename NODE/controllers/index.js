const express = require('express');
//const bodyParser = require("body-parser");
const app = express();


/*app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));*/
app.use(express.json());


const {insert,buscarPorId,deleteExame,update,readAlunos,readProfessores,readAlunoId,readProfessorId,readPaciente} = require("../models/DAO/ExameDao");

// Importando funções DAO de Pacientes
const {

  insert: insertPaciente,
  readAll: readAllPacientes,
  buscarPorId: buscarPacientePorId,
  update: updatePaciente,
  deletePaciente
} = require("../models/DAO/PacientesDao");
<<<<<<< Updated upstream


=======
>>>>>>> Stashed changes




//ALUNO E PRFESSOR
const {
  insertProfessor,
  readProfessor,
  readProfId,
  updateProfessor,
  deleteProfessor,
  insertAluno,
  readAluno,
  readAlunosId,
  updateAluno,
  deleteAluno
} = require("../models/DAO/UsuariosDAO");
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes





// CREATE PACIENTE
app.post("/pacientes", async (req, res) => {
  const {
    nome, datanasc, telefone, pacienteMail, nomeMae,
    medicamento, nome_medicamento
  } = req.body;
  const novoPaciente = await insertPaciente(
    nome, datanasc, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento
  );
  if (!novoPaciente) return res.status(400).json({ success: false });
  return res.status(201).json({ success: true, paciente: { id: novoPaciente, nome, pacienteMail } });
});

// READ TODOS OS PACIENTES
app.get("/pacientes", async (req, res) => {
  const pacientes = await readAll();
  if (!pacientes) return res.status(404).json({ success: false });
  return res.status(200).json(pacientes);
});

// READ PACIENTE POR ID
app.get("/pacientes/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const paciente = await buscarPacientePorId(id);
  if (!paciente) return res.status(404).json({ success: false });
  return res.status(200).json(paciente);
});

// UPDATE PACIENTE
app.put("/pacientes/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const {
    nome, datanasc, telefone, pacienteMail, nomeMae,
    medicamento, nome_medicamento
  } = req.body;
  const atualizado = await updatePaciente(
    id, nome, datanasc, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento
  );
  if (!atualizado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// DELETE PACIENTE
app.delete("/pacientes/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const deletado = await deletePaciente(id);
  if (!deletado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});
//---------------------------------------------//
///CRUD DE EXAME///
//--------------------------------------------//
// CREATE DE EXAME
app.post("/exame", async (req, res) => {
  const { paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno, professor } = req.body;
  const result = await insert(paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno, professor);
  if (!result) {    
    return res.status(404).json({ success: false });
  }
  return res.status(200).json({ success: true, registro: result });
});

// READ DE EXAME POR ID
app.get("/exame/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const exame = await buscarPorId(id);
  if (!exame) {
    return res.status(404).json({ success: false });
  }
  return res.status(200).json(exame);
});
//READ PACIENTE//

// DELETE DE EXAME
app.delete("/exame/:id", async (req, res) => {
  const idExame = parseInt(req.params.id);
  const deletar = await deleteExame(idExame);
  if (!deletar){ 
    return res.status(404).json({ success: false });
  }
  return res.status(200).json({ success: true });
});

// UPDATE DE EXAME
app.put("/exame", async (req, res) => {
  const { id, paciente_id, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id } = req.body;
  const editar = await update(id, paciente_id, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id);
  if (!editar){
     return res.status(404).json({ success: false });
  }
  return res.status(200).json(editar);
});



// READ DE ALUNOS
app.get("/alunos", async (req, res) => {
  const alunos = await readAlunos();
  if (!alunos){
     return res.status(404).json({ success: false });
  }
  return res.status(200).json(alunos);
});

// READ DE PROFESSORES
app.get("/professores", async (req, res) => {
  const professores = await readProfessores();
  if (!professores) {
    return res.status(404).json({ success: false });
  }
  return res.status(200).json(professores);
});

// READ DE PACIENTES
app.get("/paciente", async (req, res) => {
  const pacientes = await readPaciente();
  if (!pacientes) {
    return res.status(404).json({ success: false });
  }
  return res.status(200).json(pacientes);
});

// BUSCA ALUNO POR ID
app.get("/aluno/:id", async (req, res) => {
  const idAluno = parseInt(req.params.id);
  const aluno = await readAlunoId(idAluno);
  console.log(aluno);
  if (!aluno){
     return res.status(404).json({ success: false });
  }
  return res.status(200).json(aluno);
});

// BUSCA PROFESSOR POR ID
app.get("/professor/:id", async (req, res) => {
  const idProfessor = parseInt(req.params.id);
  const professor = await readProfessorId(idProfessor);
  if (!professor){
   return res.status(404).json({ success: false });
  }
  return res.status(200).json(professor);
});



// CREATE ALUNO
app.post("/aluno", async (req, res) => {
  const { userName, userRGM, userEmail, userPassword } = req.body;
  const novoAluno = await insertAluno(userName, userRGM, userEmail, userPassword);
  console.log("Novo Aluno: ", novoAluno);
  if (!novoAluno) return res.status(400).json({ success: false });
  return res.status(201).json({ success: true, id: novoAluno });
});

// UPDATE ALUNO
app.put("/aluno/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const { userName, userRGM, userEmail, userPassword } = req.body;
  const atualizado = await updateAluno(userName, userRGM, userEmail, userPassword);
  if (!atualizado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// DELETE ALUNO
app.delete("/aluno/:id", async (req, res) => {
  console.log("AIII DOGGG");
  const id = parseInt(req.params.id);
  const deletado = await deleteAluno(id);
  if (!deletado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});



// CREATE PROFESSOR
app.post("/professor", async (req, res) => {
  const { nome, email } = req.body;
  const novoProfessor = await insertProfessor(nome, email);
  if (!novoProfessor) return res.status(400).json({ success: false });
  return res.status(201).json({ success: true, professor: { id: novoProfessor, nome, email } });
});

// UPDATE PROFESSOR
app.put("/professor/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const { nome, email } = req.body;
  const atualizado = await updateProfessor(id, nome, email);
  if (!atualizado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// DELETE PROFESSOR
app.delete("/professor/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const deletado = await deleteProfessor(id);
  if (!deletado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});


app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});

