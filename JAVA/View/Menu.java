package View;
import java.util.ArrayList;
import java.util.Random;
import java.util.Scanner;

import Dao.AlunoDao;
import Dao.ExameDao;
import Model.Exame;
import Dao.FileSQLExame;

public class Menu {
     public static void main(String[] args) {
       Scanner sc = new Scanner(System.in);
       
       int opcao = 0;

       do{
        System.out.println("digite 1 para cadastrar exames");
        System.out.println("2-pacientes");
        System.out.println("3-professor");
        System.out.println("4-aluno");
        opcao=sc.nextInt();
        sc.nextLine();

        switch (opcao) {
            case 1:
                ExameDao exameDao = new ExameDao();
                exameDao.insert();
                break;
        
            case 2:

            break;

            case 3:
            
            break;

            case 4:
                AlunoDao alunoDao = new AlunoDao();
                alunoDao.insert();
            break;

            case 0:
                System.out.println("Saindo......");
            break;

            default:
                System.out.println("opção não encontrada no menu");
                break;
        }
       }while(opcao!=0);
       
     }

    
}
