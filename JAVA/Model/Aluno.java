package Model;
public class Aluno extends Usuario{
    private int id;
    private String rgm;

    public Aluno(){
        super();
    }

    public int getId() {
        return id;
    }


    public void setId(int id) {
        this.id = id;
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