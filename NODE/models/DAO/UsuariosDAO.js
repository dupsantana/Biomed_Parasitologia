const pool = require('./db');

// ===========================
// CRUD ALUNO
// ===========================

// CREATE ALUNO
async function insertAluno(userName, userRGM, userEmail, userPassword) {
  try {
    const [result] = await pool.query(
      `INSERT INTO aluno (nome, rgmAluno, email, senha) VALUES (?, ?, ?, ?)`,
      [userName, userRGM, userEmail, userPassword]
    );
    return result.insertId && result.insertId > 0 ? result.insertId : false;
  } catch (erro) {
    console.error("Erro insertAluno:", erro.message);
    return false;
  }
}

// READ TODOS OS ALUNOS
async function readAluno() {
  try {
    const [rows] = await pool.query(
      `SELECT id, nome, rgmAluno, email, senha FROM aluno`
    );
    return rows;
  } catch (erro) {
    console.error("Erro readAluno:", erro.message);
    return false;
  }
}

// READ ALUNO POR ID
async function readAlunosId(id) {
  try {
    const [rows] = await pool.query(
      `SELECT id, nome, rgmAluno, email, senha FROM aluno WHERE id = ?`,
      [id]
    );
    return rows.length > 0 ? rows[0] : false;
  } catch (erro) {
    console.error("Erro readAlunosId:", erro.message);
    return false;
  }
}

// UPDATE ALUNO
async function updateAluno(id, nome, email, telefone) {
  try {
    const [result] = await pool.query(
      `UPDATE aluno SET nome = ?, email = ?, telefone = ? WHERE id = ?`,
      [nome, email, telefone, id]
    );
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro updateAluno:", erro.message);
    return false;
  }
}

// DELETE ALUNO
async function deleteAluno(id) {
  try {
    const [result] = await pool.query(
      `DELETE FROM aluno WHERE id = ?`,
      [id]
    );
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro deleteAluno:", erro.message);
    return false;
  }
}

// ===========================
// CRUD PROFESSOR
// ===========================

// CREATE PROFESSOR
async function insertProfessor(nome, email) {
  try {
    const [result] = await pool.query(
      `INSERT INTO professor (nome, email) VALUES (?, ?)`
    , [nome, email]);
    return result.insertId && result.insertId > 0 ? result.insertId : false;
  } catch (erro) {
    console.error("Erro insertProfessor:", erro.message);
    return false;
  }
}

// READ TODOS OS PROFESSORES
async function readProfessor() {
  try {
    const [rows] = await pool.query(
      `SELECT id, nome, email FROM professor`
    );
    return rows;
  } catch (erro) {
    console.error("Erro readProfessores:", erro.message);
    return false;
  }
}

// READ PROFESSOR POR ID
async function readProfId(id) {
  try {
    const [rows] = await pool.query(
      `SELECT id, nome, email FROM professor WHERE id = ?`,
      [id]
    );
    return rows.length > 0 ? rows[0] : false;
  } catch (erro) {
    console.error("Erro readProfId:", erro.message);
    return false;
  }
}

// UPDATE PROFESSOR
async function updateProfessor(id, nome, email) {
  try {
    const [result] = await pool.query(
      `UPDATE professor SET nome = ?, email = ? WHERE id = ?`,
      [nome, email, id]
    );
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro updateProfessor:", erro.message);
    return false;
  }
}

// DELETE PROFESSOR
async function deleteProfessor(id) {
  try {
    const [result] = await pool.query(
      `DELETE FROM professor WHERE id = ?`,
      [id]
    );
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro deleteProfessor:", erro.message);
    return false;
  }
}

// Exportando todas as funções
module.exports = {
  insertAluno,
  readAluno,
  readAlunosId,
  updateAluno,
  deleteAluno,
  insertProfessor,
  readProfessor,
  readProfId,
  updateProfessor,
  deleteProfessor
};
