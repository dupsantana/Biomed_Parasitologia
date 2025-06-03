package Controller;
import Model.Usuario;
import Dao.ExameDao;
import Model.Aluno;
import Model.Pacientes;
import Model.Professor;
import Model.Exame;

public class SistemaController {

    private ExameDao exameDao;

    public SistemaController(){
        exameDao = new ExameDao();
    }


    public boolean cadastrarExame(){
        return true;
    }
}
