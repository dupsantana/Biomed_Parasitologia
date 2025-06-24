const pool = require('./db');

// CREATE
async function insert(registro, nome_paciente, datanasc, telefone, pacienteMail, nomeMae, epf, sangueocluto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento) {
  try {
    const [result] = await pool.query(`
      INSERT INTO paciente (
        registro, nome_paciente, datanasc, telefone, pacienteMail, nomeMae,
        epf, sangueocluto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento
      ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    `, [
      registro, nome_paciente, datanasc, telefone, pacienteMail, nomeMae,
      epf, sangueocluto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento
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
    const [rows] = await pool.query("SELECT * FROM paciente");
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
      const [rows] = await pool.query(`SELECT * FROM paciente WHERE id = ?`, [id]);
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
async function update(id, registro, nome_paciente, datanasc, telefone, pacienteMail, nomeMae, epf, sangueocluto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento) {
  try {
    const [result] = await pool.query(`
      UPDATE paciente SET
        registro = ?, nome_paciente = ?, datanasc = ?, telefone = ?, pacienteMail = ?, nomeMae = ?,
        epf = ?, sangueocluto = ?, naosolici = ?, medicamento_sim = ?, medicamento_nao = ?, nome_medicamento = ?
      WHERE id = ?
    `, [
      registro, nome_paciente, datanasc, telefone, pacienteMail, nomeMae,
      epf, sangueocluto, naosolici, medicamento_sim, medicamento_nao, nome_medicamento, id
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
      const [result] = await pool.query(`DELETE FROM paciente WHERE id = ?`, [id]);
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