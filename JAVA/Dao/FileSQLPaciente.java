package Dao;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class FileSQLPaciente {
    private static String fileName = "sql/insertPaciente.sql";


    public void writeInsertStatement(String insert){
        try {
            FileWriter fw = new FileWriter(fileName, true);
            PrintWriter pw = new PrintWriter(fw);
            pw.println("\n" + insert + "\n");
            pw.close();//Encerra o printer e escreve  

        } catch (IOException e) {
            System.err.println("Erro ao escrever no insert.sql\n" + e.getMessage());
        }
    }
}