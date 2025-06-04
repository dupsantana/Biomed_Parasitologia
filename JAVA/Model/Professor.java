package Model;
public class Professor extends Usuario {
    private int id;
    private String rgmProfessor;

    public Professor(){
        super();
    }
    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }
    public String getRgmProfessor() {
        return rgmProfessor;
    }

    public void setRgmProfessor(String rgmProfessor) {
        this.rgmProfessor = rgmProfessor;
    }

    @Override
    public String toString() {
        return super.toString() +  " RgmProfessor=" + rgmProfessor + "\n";
    }

    

    
    


}
