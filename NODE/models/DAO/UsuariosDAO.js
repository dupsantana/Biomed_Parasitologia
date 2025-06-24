// ========== INÍCIO DAS IMPLEMENTAÇÕES (CRUD ALUNO) ==========

const pool = require('./db');
// CREATE ALUNO
async function insertAluno(userName, userRGM, userEmail, userPassword) {
  try {
    const [result] = await pool.query(
      `INSERT INTO aluno (nome, rgmAluno, email, senha) VALUES (?, ?, ?, ?)`,
      [userName, userRGM, userEmail, userPassword]
    );
    if(result.insertId && result.insertId > 0 ){
      return result.insertId;
    }else{
      return false;
    }
  } catch (erro) {
    console.error("Erro insertAluno:", erro.message);
    return false;
  }
 //console.log("Rodou legal!", userName, userRGM, userEmail, userPassword);
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

// ========== INÍCIO DAS IMPLEMENTAÇÕES (CRUD PROFESSOR) ==========

// CREATE PROFESSOR
async function insertProfessor(nome, email) {
  try {
    const [result] = await pool.query(
      `INSERT INTO professor (nome, email) VALUES (?, ?)`,
      [nome, email]
    );
    return result.insertId && result.insertId > 0
      ? result.insertId
      : false;
  } catch (erro) {
    console.error("Erro insertProfessor:", erro.message);
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

module.exports = {
   insertAluno,
  updateAluno,
  deleteAluno,
  insertProfessor,
  updateProfessor,
  deleteProfessor
};