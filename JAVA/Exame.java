public class Exame {
    
    private String registo;
    private String nome_paciente;
    private String entrada;
    private String data_exame;
    private String data_entrega;
    private String tipo_amostra;
    private String tecnica;
    private String consistencia;
    private String coloracao;
    private String muco;
    private String sangue;
    private String responsavel_exame;
    private String preceptor;


    public Exame() {
    }


    public String getRegisto() {
        return registo;
    }


    public void setRegisto(String registo) {
        this.registo = registo;
    }


    public String getNome_paciente() {
        return nome_paciente;
    }


    public void setNome_paciente(String nome_paciente) {
        this.nome_paciente = nome_paciente;
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


    public String getResponsavel_exame() {
        return responsavel_exame;
    }


    public void setResponsavel_exame(String responsavel_exame) {
        this.responsavel_exame = responsavel_exame;
    }


    public String getPreceptor() {
        return preceptor;
    }


    public void setPreceptor(String preceptor) {
        this.preceptor = preceptor;
    }

    @Override
    public String toString() {
        return "Exame{" +
                "registo='" + registo + '\'' +
                ", nome_paciente='" + nome_paciente + '\'' +
                ", entrada='" + entrada + '\'' +
                ", data_exame='" + data_exame + '\'' +
                ", data_entrega='" + data_entrega + '\'' +
                ", tipo_amostra='" + tipo_amostra + '\'' +
                ", tecnica='" + tecnica + '\'' +
                ", consistencia='" + consistencia + '\'' +
                ", coloracao='" + coloracao + '\'' +
                ", muco='" + muco + '\'' +
                ", sangue='" + sangue + '\'' +
                ", responsavel_exame='" + responsavel_exame + '\'' +
                ", preceptor='" + preceptor + '\'' +
                '}';
    }
}
