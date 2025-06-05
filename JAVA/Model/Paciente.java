package Model;
public class Paciente {
    private int id;
    private String nome;
    private String dataNasc;
    private String telefone;
    private String email;
    private String nomeMae;
    private Boolean medicamento;
    private String nome_medicamento;

    public Paciente(){}

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getDataNasc() {
        return dataNasc;
    }

    public void setDataNasc(String dataNasc) {
        this.dataNasc = dataNasc;
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

    public Boolean getMedicamento() {
        return medicamento;
    }

    public void setMedicamento(boolean medicamento) {
        this.medicamento = medicamento;
    }

    public String getNome_medicamento() {
        return nome_medicamento;
    }

    public void setNome_medicamento(String nome_medicamento) {
        this.nome_medicamento = nome_medicamento;
    }

    
    public String stringSql() {
    return "INSERT INTO pacientes(id, nome, datanasc, telefone, email, nomeMae, medicamento, nome_medicamento) " +
           "VALUES('" + this.id + "', '" + this.nome + "', '" + this.dataNasc + "', '" + this.telefone + "', " +
           "'" + this.email + "', '" + this.nomeMae + "', '" + this.medicamento + "', '" + this.nome_medicamento + "');\n";
}


  
    
}
