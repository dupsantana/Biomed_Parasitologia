const pool = require('./db');

// CREATE
async function insert( nome, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento) {
  try {
    const [result] = await pool.query(`
      INSERT INTO pacientes (
        nome, telefone, pacienteMail, nomeMae,
        medicamento, nome_medicamento
      ) VALUES (?, ?, ?, ?, ?, ?)
    `, [
      nome, telefone, pacienteMail, nomeMae,
      medicamento, nome_medicamento
    ]);
    if (result.insertId && result.insertId > 0) {
      return result.insertId;
    } else {
      return false;
    }
  } catch (erro) {
    console.error("Falha ao inserir paciente: ", erro.message);
    return false;
  }
}

// READ ALL
async function readAll() {
  try {
    const [rows] = await pool.query("SELECT * FROM pacientes");
    if (rows.length > 0) {
      return rows;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao ler pacientes: ", erro.message);
    return false;
  }
}

// READ BY ID
async function buscarPorId(id) {
  try {
    if (id) {
      const [rows] = await pool.query(`SELECT * FROM pacientes WHERE id = ?`, [id]);
      if (rows.length > 0) {
        return rows[0];
      }
      return false;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao buscar paciente por id: ", erro.message);
    return false;
  }
}

// UPDATE
async function update(id, nome, telefone, pacienteMail, nomeMae, medicamento, nome_medicamento) {
  try {
    const [result] = await pool.query(`
      UPDATE pacientes SET
        nome = ?, telefone = ?, pacienteMail = ?, nomeMae = ?,
        medicamento = ?, nome_medicamento = ?
      WHERE id = ?
    `, [
      nome, telefone, pacienteMail, nomeMae,
      medicamento, nome_medicamento, id
    ]);
    return result.affectedRows > 0;
  } catch (erro) {
    console.error("Erro ao atualizar paciente: ", erro.message);
    return false;
  }
}

// DELETE
async function deletePaciente(id) {
  try {
    if (id) {
      const [result] = await pool.query(`DELETE FROM pacientes WHERE id = ?`, [id]);
      return result.affectedRows > 0;
    }
    return false;
  } catch (erro) {
    console.error("Erro ao deletar paciente: ", erro.message);
    return false;
  }
}

module.exports = {
  insert,
  readAll,
  buscarPorId,
  update,
  deletePaciente
};