    CREATE TABLE PACIENTE(  
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    pacienteMail VARCHAR(50) NOT NULL,
    nomeMae VARCHAR(80) NOT NULL,
    medicamento BOOLEAN NOT NULL,
    nome_medicamento VARCHAR(50)
);

CREATE TABLE EXAME(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    registro VARCHAR(30) NOT NULL,  
    paciente_id INT NOT NULL,
    entrada VARCHAR(30) NOT NULL,
    data_exame DATE NOT NULL,
    data_entrega DATE NOT NULL,
    tipo_amostra VARCHAR(80), 
    tecnica VARCHAR(80), 
    consistencia VARCHAR(50),
    coloracao VARCHAR(50),
    muco VARCHAR(50),
    sangue VARCHAR(50),
    responsavel_exame VARCHAR (80) NOT NULL,
    preceptor VARCHAR (80) NOT NULL,
    FOREIGN KEY (paciente_id) REFERENCES PACIENTE(id)
    ON DELETE CASCADE
);

 CREATE TABLE ALUNO(
    rgm INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(50) NOT NULL,
 );

 CREATE TABLE PROFESSOR(
    rgmAluno INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(50) NOT NULL,
 );
