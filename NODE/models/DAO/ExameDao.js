// models/DAO/ExameDao.js

// CONEXÃO COM O BANCO DE DADOS VEM AQUI 
const pool = require('./db');

async function insert(paciente, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno, professor) {
  try {
    const [result] = await pool.query(`
      INSERT INTO exame (
        paciente_id, entrada, data_exame, data_entrega, tipo_amostra,
        tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id
      ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    `, [
      paciente, entrada, data_exame, data_entrega, tipo_amostra,
      tecnica, consistencia, coloracao, muco, sangue, aluno, professor
    ]);
    return result.insertId && result.insertId > 0
      ? result.insertId
      : false;
  } catch (erro) {
    console.error("falha ao inserir cliente:", erro.message);
    return false;
  }
}

async function buscarPorId(id) {
  try {
    if (id) {
      const [rows] = await pool.query(
        `SELECT * FROM exame WHERE registro = ?`,
        [id]
      );
      if (rows.length > 0) {
        return rows;
      }
      return false;
    }
  } catch (erro) {
    console.error("Erro ao buscar exame por id:", erro.message);
    return false;
  }
}

async function deleteExame(id) {
  try {
    if (id) {
      const [result] = await pool.query(
        `DELETE FROM exame WHERE registro = ?`,
        [id]
      );
      return result.affectedRows > 0;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao deletar o exame:", erro.message);
    return false;
  }
}

async function update(id, paciente_id, entrada, data_exame, data_entrega, tipo_amostra, tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id) {
  try {
    const [result] = await pool.query(`
      UPDATE exame SET
        paciente_id = ?, entrada = ?, data_exame = ?, data_entrega = ?,
        tipo_amostra = ?, tecnica = ?, consistencia = ?, coloracao = ?,
        muco = ?, sangue = ?, aluno_id = ?, professor_id = ?
      WHERE registro = ?
    `, [
      paciente_id, entrada, data_exame, data_entrega, tipo_amostra,
      tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id, id
    ]);
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro ao atualizar dados:", erro.message);
    return false;
  }
}



async function readAlunos() {
  try {
    const [rows] = await pool.query("SELECT * FROM aluno");
    console.log()
    return rows.length > 0 ? rows : false;
  } catch (erro) {
    console.error("Erro ao ler todos os alunos:", erro.message);
    return false;
  }
}

async function readProfessores() {
  try {
    const [rows] = await pool.query("SELECT * FROM professor");
    return rows.length > 0 ? rows : false;
  } catch (erro) {
    console.error("Erro ao ler professores:", erro.message);
    return false;
  }
}

async function readPaciente() {
  try {
    const [rows] = await pool.query("SELECT * FROM paciente");
    return rows.length > 0 ? rows : false;
  } catch (erro) {
    console.error("Erro ao ler pacientes:", erro.message);
    return false;
  }
}

async function readAlunoId(id) {
  try {
    if (id) {
      const [rows] = await pool.query(
        `SELECT * FROM aluno WHERE id = ?`,
        [id]
      );
      return rows.length > 0 ? rows : false;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao buscar aluno por id:", erro.message);
    return false;
  }
}

async function readProfessorId(id) {
  try {
    if (id) {
      const [rows] = await pool.query(
        `SELECT * FROM professor WHERE id = ?`,
        [id]
      );
      return rows.length > 0 ? rows : false;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao buscar professor por id:", erro.message);
    return false;
  }
}



// ========= EXPORTAÇÕES =========
module.exports = {
  insert,
  buscarPorId,
  deleteExame,
  update,
  readAlunos,
  readProfessores,
  readAlunoId,
  readProfessorId,
  readPaciente,
};