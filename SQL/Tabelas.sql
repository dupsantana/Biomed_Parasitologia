    CREATE TABLE PACIENTE(  
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    pacienteMail VARCHAR(50) NOT NULL,
    nomeMae VARCHAR(80) NOT NULL,
    medicamento BOOLEAN NOT NULL,
    nome_medicamento VARCHAR(50)
);
 DROP TABLE exame;

CREATE TABLE EXAME (
    registro INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    paciente_id INT NOT NULL,
    professor_id INT NOT NULL,
    aluno_id INT NOT NULL,
    entrada TIME NOT NULL,
    data_exame DATE NOT NULL,
    data_entrega DATE NOT NULL,
    tipo_amostra VARCHAR(80), 
    tecnica VARCHAR(80), 
    consistencia VARCHAR(50),
    coloracao VARCHAR(50),
    muco VARCHAR(50),
    sangue VARCHAR(50),   
    FOREIGN KEY (paciente_id) REFERENCES PACIENTE(id) ON DELETE CASCADE,
    FOREIGN KEY (professor_id) REFERENCES PROFESSOR(id) ON DELETE CASCADE,
    FOREIGN KEY (aluno_id) REFERENCES ALUNO(id) ON DELETE CASCADE
);

 CREATE TABLE ALUNO(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    rgmAluno INTEGER NOT NULL,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

 CREATE TABLE PROFESSOR(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    rgmProfessor INTEGER NOT NULL,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(50) NOT NULL
 );


