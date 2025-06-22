//CONEXÃO COM O BANCO DE DADOS VEM AQUI 
const pool = require('./db');

async function insert(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor){
  if(paciente,entrada,data_exame,data_entrega,tipo_amostra,tecnica,consistencia,coloracao,muco,sangue,aluno,professor){
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
  
        
  }
  console.error("falha ao inserir cliente, faltou algo");
  return false;
}
function buscarPorId(){

}

function deleteExame(){

}
function update(){

}
async function readAlunos(){
    const [rows]= await pool.query("SELECT * FROM aluno");
    const alunos = rows;

    if(alunos.length > 0){
        return alunos;
    }
    return false;
   
}

async function readProfessores(){
    const [rows] = await pool.query("SELECT * FROM professor");
    const professores = rows;

    if(professores.length > 0){
        return professores;
    }
    return false;
}
async function readPaciente(){
    const [rows] = await pool.query("SELECT * FROM paciente");
    const pacientes = rows;

    if(pacientes.length > 0){
        return pacientes;
    }
    return false;

}
function readAlunoId(){

}
function readProfessorId(){

}


module.exports = {insert,buscarPorId,deleteExame,update,readAlunos,readProfessores,readAlunoId,
    readProfessorId,readPaciente};