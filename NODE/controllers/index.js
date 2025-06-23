const express = require('express');
const bodyParser = require("body-parser");
const app = express();

// Middleware
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.json());

// Importando funções DAO (originais do seu amigo)
const {
  insert,
  buscarPorId,
  deleteExame,
  update,
  readAlunos,
  readProfessores,
  readAlunoId,
  readProfessorId,
  readPaciente,
  // abaixo, as novas funções que você deve implementar no DAO:
  insertAluno,
  updateAluno,
  deleteAluno,
  insertProfessor,
  updateProfessor,
  deleteProfessor
} = require("../models/DAO/ExameDao");

// ============================
// ROTAS EXISTENTES DE EXAME
// ============================

// CREATE DE EXAME
app.post("/exame", async (req, res) => {
  const { paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno, professor } = req.body;
  const result = await insert(paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno, professor);
  if (!result) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true, registro: result });
});

// READ DE EXAME POR ID
app.get("/exame/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const exame = await buscarPorId(id);
  if (!exame) return res.status(404).json({ success: false });
  return res.status(200).json(exame);
});

// DELETE DE EXAME
app.delete("/exame/:id", async (req, res) => {
  const idExame = parseInt(req.params.id);
  const deletar = await deleteExame(idExame);
  if (!deletar) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// UPDATE DE EXAME
app.put("/exame", async (req, res) => {
  const { id, paciente_id, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id } = req.body;
  const editar = await update(id, paciente_id, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id);
  if (!editar) return res.status(404).json({ success: false });
  return res.status(200).json(editar);
});

// ============================
// ROTAS EXISTENTES DE LEITURA
// ============================

// READ DE ALUNOS
app.get("/alunos", async (req, res) => {
  const alunos = await readAlunos();
  if (!alunos) return res.status(404).json({ success: false });
  return res.status(200).json(alunos);
});

// READ DE PROFESSORES
app.get("/professores", async (req, res) => {
  const professores = await readProfessores();
  if (!professores) return res.status(404).json({ success: false });
  return res.status(200).json(professores);
});

// READ DE PACIENTES
app.get("/pacientes", async (req, res) => {
  const pacientes = await readPaciente();
  if (!pacientes) return res.status(404).json({ success: false });
  return res.status(200).json(pacientes);
});

// BUSCA ALUNO POR ID
app.get("/aluno/:id", async (req, res) => {
  const idAluno = parseInt(req.params.id);
  const aluno = await readAlunoId(idAluno);
  if (!aluno) return res.status(404).json({ success: false });
  return res.status(200).json(aluno);
});

// BUSCA PROFESSOR POR ID
app.get("/professor/:id", async (req, res) => {
  const idProfessor = parseInt(req.params.id);
  const professor = await readProfessorId(idProfessor);
  if (!professor) return res.status(404).json({ success: false });
  return res.status(200).json(professor);
});

// ============================
// NOVAS ROTAS DE CRUD PARA ALUNO
// ============================

// CREATE ALUNO
app.post("/aluno", async (req, res) => {
  const { nome, email, telefone } = req.body;
  const novoAluno = await insertAluno(nome, email, telefone);
  if (!novoAluno) return res.status(400).json({ success: false });
  return res.status(201).json({ success: true, aluno: { id: novoAluno, nome, email, telefone } });
});

// UPDATE ALUNO
app.put("/aluno/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const { nome, email, telefone } = req.body;
  const atualizado = await updateAluno(id, nome, email, telefone);
  if (!atualizado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// DELETE ALUNO
app.delete("/aluno/:id", async (req, res) => {
  const id = parseInt(req.params.id);
  const deletado = await deleteAluno(id);
  if (!deletado) return res.status(404).json({ success: false });
  return res.status(200).json({ success: true });
});

// ============================
// NOVAS ROTAS DE CRUD PARA PROFESSOR
// ============================

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

// ============================
// INICIA O SERVIDOR
// ============================
app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});
