public class PacienteExame {
    
    private String nome;
    private String dataNascimento;
    private String dataExame;
    private String periodo;
    private String telefone;
    private String email;
    private String nomeMae;
    private String tomaMedicamento;
    private String medicamento;

    public PacienteExame(){}

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getDataNascimento() {
        return dataNascimento;
    }

    public void setDataNascimento(String dataNascimento) {
        this.dataNascimento = dataNascimento;
    }

    public String getDataExame() {
        return dataExame;
    }

    public void setDataExame(String dataExame) {
        this.dataExame = dataExame;
    }

    public String getPeriodo() {
        return periodo;
    }

    public void setPeriodo(String periodo) {
        this.periodo = periodo;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getNomeMae() {
        return nomeMae;
    }

    public void setNomeMae(String nomeMae) {
        this.nomeMae = nomeMae;
    }

    public String getTomaMedicamento() {
        return tomaMedicamento;
    }

    public void setTomaMedicamento(String tomaMedicamento) {
        this.tomaMedicamento = tomaMedicamento;
    }

    public String getMedicamento() {
        return medicamento;
    }

    public void setMedicamento(String medicamento) {
        this.medicamento = medicamento;
    }

    @Override
    public String toString() {
        return "Nome: " + nome + ", Data de Nascimento=" + dataNascimento + ", Data do Exame: " + dataExame
                + ", periodo: " + periodo + ", telefone: " + telefone + ", email: " + email + ", nomeMae: " + nomeMae
                + ", Toma Medicamento: " + tomaMedicamento + ", Medicamento: " + medicamento + "\n";
    }

    
}
