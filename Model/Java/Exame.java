public class Exame {
    
     private String dataRealizacao;
    private String hora;
    private String dataPrevista;
    private String tipoAmostra;
    private String tecnicaUtilizada;
    private String consistencia;
    private String coloracao;
    private String muco;
    private String sangue;
    private String analise;

    //  Construtor vazio
    public Exame() {
    }

    // Getters e Setters
    public String getDataRealizacao() {
        return dataRealizacao;
    }

    public void setDataRealizacao(String dataRealizacao) {
        this.dataRealizacao = dataRealizacao;
    }

    public String getHora() {
        return hora;
    }

    public void setHora(String hora) {
        this.hora = hora;
    }

    public String getDataPrevista() {
        return dataPrevista;
    }

    public void setDataPrevista(String dataPrevista) {
        this.dataPrevista = dataPrevista;
    }

    public String getTipoAmostra() {
        return tipoAmostra;
    }

    public void setTipoAmostra(String tipoAmostra) {
        this.tipoAmostra = tipoAmostra;
    }

    public String getTecnicaUtilizada() {
        return tecnicaUtilizada;
    }

    public void setTecnicaUtilizada(String tecnicaUtilizada) {
        this.tecnicaUtilizada = tecnicaUtilizada;
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

    public String getAnalise() {
        return analise;
    }

    public void setAnalise(String analise) {
        this.analise = analise;
    }

    // 🔸 Método toString
    @Override
    public String toString() {
        return "Data de Realização: " + dataRealizacao + ", " +
               "Hora: " + hora + ", " +
               "Data Prevista: " + dataPrevista + ", " +
               "Tipo de Amostra: " + tipoAmostra + ", " +
               "Técnica Utilizada: " + tecnicaUtilizada + ", " +
               "Consistência: " + consistencia + ", " +
               "Coloração: " + coloracao + ", " +
               "Muco: " + muco + ", " +
               "Sangue: " + sangue + ", " +
               "Análise: " + analise;
    }
}
