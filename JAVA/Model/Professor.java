package Model;
public class Professor extends Usuario {
    
    private String rgmProfessor;

    public Professor(){
        super();
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
