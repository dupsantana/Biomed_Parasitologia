package Model;
public class Aluno extends Usuario{

    private String rgm;

    public Aluno(){
        super();
    }

    public String getRgm() {
        return rgm;
    }

    public void setRgm(String rgm) {
        this.rgm = rgm;
    }

    @Override
    public String toString() {
        return super.toString() + "rgm: " + rgm + "\n";
    }

    

}