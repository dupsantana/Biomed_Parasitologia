//CONEXÃO COM O BANCO DE DADOS VEM AQUI 
const pool = require('./db');

async function insert(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor){
 try{
 
    const [result] = await pool.query(`
        INSERT INTO exame (
        paciente_id, entrada, data_exame, data_entrega, tipo_amostra,
        tecnica, consistencia, coloracao, muco, sangue, aluno_id, professor_id
      ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    `, [
      paciente, entrada, data_exame, data_entrega, tipo_amostra,
      tecnica, consistencia, coloracao, muco, sangue, aluno, professor
    ]);

    if (result.insertId && result.insertId > 0) {
        return result.insertId;

      } else {
        return false;
      }
  
        
    }catch(erro){
  console.error("falha ao inserir cliente: ", erro.message);
  return false;
    }
}

async function buscarPorId(id){
try{   
  if(id){
    const [rows] = await pool.query(`SELECT * FROM exame WHERE registro = ?`,[id]);
    const exameEncontrado = rows;
    console.log(exameEncontrado);
    if(exameEncontrado.length > 0){
      return exameEncontrado;
    } 
    return false;
  }
}catch(erro){
  console.error("Erro ao buscar exame por id: ", erro.message);
}
}

async function deleteExame(id){

try{
  if(id){
    const result  = await pool.query(`DELETE FROM exame WHERE registro = ?`,[id]);

    
    return true;
  }
}catch(erro){
  console.error("Erro ao deletar o exame: ", erro.message);
  return false;
}

}

async function update(id,paciente_id,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno_id,professor_id){
 
  //console.log(id,paciente_id,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno_id,professor_id)  
try{
const [result] = await pool.query(`UPDATE exame SET paciente_id = ?,entrada = ?,data_exame = ?,data_entrega = ?,tipo_amostra = ?,
                                  tecnica = ?,consistencia = ?,coloracao = ?,muco = ?,sangue = ?,aluno_id = ?,professor_id = ? WHERE registro = ? `,
                                [paciente_id,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno_id,professor_id, id]);

return true;

}catch(erro){
  
  console.error("Erro ao atualizar dados: ", erro.message);

  return false;
}

}
async function readAlunos(){
  try{
    const [rows]= await pool.query("SELECT * FROM aluno");
    const alunos = rows;

    if(alunos.length > 0){
        return alunos;
    }
    return false;
  }catch(erro){
    console.error("Erro ao ler todos os alunos: ",  erro.message);
    return false;
  }
}

async function readProfessores(){
  try{
    const [rows] = await pool.query("SELECT * FROM professor");
    const professores = rows;

    if(professores.length > 0){
        return professores;
    }
    return false;

  }catch(erro){
    console.error("Erro ao ler professores:" , erro.message);
    return false;
  }
}
async function readPaciente(){
  try{
    const [rows] = await pool.query("SELECT * FROM paciente");
    const pacientes = rows;

    if(pacientes.length > 0){
        return pacientes;
    }
    return false;
  }catch(erro){
    console.error("Erro ao ler pacientes: ", erro.message);
    return false;
  }
}
async function readAlunoId(id){
 //console.log(id);
 try{
  if(id){  
      const [rows] = await pool.query(`SELECT * FROM aluno WHERE id = ? `,[id]);
      const alunoEncontrado = rows;
      console.log("aluno encontrado: ", alunoEncontrado);
      if(alunoEncontrado.length > 0){
        return alunoEncontrado;
      }
      return false;
  }
  return false;

  }catch(erro){
    console.error("Erro ao buscar aluno por id: ", erro.message);
 }
}
async function readProfessorId(id){
//console.log(id);
try{
  if(id){
    const [rows] = await pool.query(`SELECT * FROM professor WHERE id = ?`, [id]);
    const professorEncontrado = rows;
    console.log("professor encontrado: ", professorEncontrado);
    if(professorEncontrado.length > 0){
      return professorEncontrado;
    }
    return false; 
  }
  return false;
}catch(erro){
  console.error("Erro ao buscar professor por id: ", erro.message);
}
}


module.exports = {insert,buscarPorId,deleteExame,update,readAlunos,readProfessores,readAlunoId,
    readProfessorId,readPaciente};