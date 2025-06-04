package Dao;

import java.util.ArrayList;
import java.util.Random;

import Model.Exame;

public class ExameDao {
    
    public void insert(){
         FileSQLExame arquivo = new FileSQLExame();
        ArrayList<Exame> listaExames = new ArrayList<>();
        Random aleatorio = new Random();

        for(int i = 1; i<=50; i++){
            Exame exame = new Exame();
            exame.setRegistro(i);
            exame.setIdpaciente(1 + aleatorio.nextInt(50));
            exame.setIdProfessor(1 + aleatorio.nextInt(50));
            exame.setIdAluno(1 + aleatorio.nextInt(50));          
            int entrada = 1+aleatorio.nextInt(28);
            int exameEfetuado = entrada + aleatorio.nextInt(29 - entrada + 1);
            int exameEntraga = (exameEfetuado + 1) + aleatorio.nextInt(30 - exameEfetuado);
            
           
            exame.setEntrada("2025-06-"+ entrada);            
            exame.setData_exame("2025-06-"+ exameEfetuado);
            exame.setData_entrega("2025-06-"+ exameEntraga);

            String[] amostras = {"Sangue", "Urina", "Fezes", "Saliva"};
            exame.setTipo_amostra(amostras[aleatorio.nextInt(amostras.length)]);

            String[] tecnicas = {"Microscopia", "Colorimetria", "PCR", "Cultura"};
            exame.setTecnica(tecnicas[aleatorio.nextInt(tecnicas.length)]);

            String[] consistencias = {"Líquido", "Pastoso", "Sólido"};
            exame.setConsistencia(consistencias[aleatorio.nextInt(consistencias.length)]);

            String[] coloracoes = {"Amarelo", "Vermelho", "Marrom", "Incolor"};
            exame.setColoracao(coloracoes[aleatorio.nextInt(coloracoes.length)]);

            String[] muco = {"Sim", "Não"};
            exame.setMuco(muco[aleatorio.nextInt(2)]);

            String[] sangue = {"Sim", "Não"};
            exame.setSangue(sangue[aleatorio.nextInt(2)]);

            listaExames.add(exame);
        }

        for(Exame ex : listaExames){
            arquivo.writeInsertStatement(ex.stringSql());
        }

        System.out.println("foi tudo inserido");
    }
}
