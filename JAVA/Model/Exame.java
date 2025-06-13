package Model;
public class Exame {
    
    private int registro;
    private int idPaciente;
    private String entrada;
    private String data_exame;
    private String data_entrega;
    private String tipo_amostra;
    private String tecnica;
    private String consistencia;
    private String coloracao;
    private String muco;
    private String sangue;    
    private int idAluno;
    private int idProfessor;


    public Exame() {
    }

    
    public int getRegistro() {
        return registro;
    }


    public void setRegistro(int registro) {
        this.registro = registro;
    }


    public int getIdpaciente() {
        return idPaciente;
    }


    public void setIdpaciente(int id) {
        this.idPaciente = id;
    }


    public String getEntrada() {
        return entrada;
    }


    public void setEntrada(String entrada) {
        this.entrada = entrada;
    }


    public String getData_exame() {
        return data_exame;
    }


    public void setData_exame(String data_exame) {
        this.data_exame = data_exame;
    }


    public String getData_entrega() {
        return data_entrega;
    }


    public void setData_entrega(String data_entrega) {
        this.data_entrega = data_entrega;
    }


    public String getTipo_amostra() {
        return tipo_amostra;
    }


    public void setTipo_amostra(String tipo_amostra) {
        this.tipo_amostra = tipo_amostra;
    }


    public String getTecnica() {
        return tecnica;
    }


    public void setTecnica(String tecnica) {
        this.tecnica = tecnica;
    }


    public String getConsistencia() {
        return consistencia;
    }


    public void setConsistencia(String consistencia) {
        this.consistencia = consistencia;
    }


    public String getColoracao() {
        return coloracao;
    }


    public void setColoracao(String coloracao) {
        this.coloracao = coloracao;
    }


    public String getMuco() {
        return muco;
    }


    public void setMuco(String muco) {
        this.muco = muco;
    }


    public String getSangue() {
        return sangue;
    }


    public void setSangue(String sangue) {
        this.sangue = sangue;
    }  
    
    public int getIdAluno() {
        return idAluno;
    }

    public void setIdAluno(int idAluno) {
        this.idAluno = idAluno;
    }

    public int getIdProfessor() {
        return idProfessor;
    }

    public void setIdProfessor(int idProfessor) {
        this.idProfessor = idProfessor;
    }
     
    public String stringSql(){
        return  "INSERT INTO exame(registro, paciente_id, professor_id, aluno_id, entrada, data_exame, data_entrega,tipo_amostra, tecnica, consistencia, coloracao, muco, sangue)"
                + "VALUES('"+this.registro+"', '"+this.idPaciente+"', '"+this.idAluno+"', '"+this.entrada+"', '"+this.data_exame+"', '"+this.data_entrega+"', '"+this.tipo_amostra+"', '"+this.tecnica+"', '"+this.consistencia+"', '"+this.coloracao+"', '"+this.muco+"', '"+this.sangue+"');\n";
    }
    
   


    
}
