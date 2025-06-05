package Model;
public class Aluno extends Usuario{
    private int id;
    private int rgmAluno;

    public Aluno(){
        super();
    }

    public int getId() {
        return id;
    }


    public void setId(int id) {
        this.id = id;
    }
    
    public int getrgmAluno() {
        return rgmAluno;
    }

    public void setrgmAluno(int rgmAluno) {
        this.rgmAluno = rgmAluno;
    }

    @Override
    public String toString() {
        return super.toString() + "rgm: " + rgmAluno + "\n";
    }

    public String stringSql(){
        return "INSERT INTO aluno (id, rgmAluno, nome, email, senha)"
        + "VALUES('"+this.id+"', '"+this.rgmAluno+"','"+getNome()+"', '"+getEmail()+"', '"+getSenha()+"');\n";
    }

    

    

}