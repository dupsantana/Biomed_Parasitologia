//REGRAS DOS BOTÕES

//-------------BOTÃO DE LOGIN-------------//
const btn_entrar = document.getElementById('btn_entrar');

btn_entrar.addEventListener('click', () => {

    window.location.href = 'TelaLogin1.php';
});
//-------------------------------------------//


//-------------BOTÃO DE CADASTRO ALUNO-------------//
const btn_cadastraraluno = document.getElementById('btn_cadastraraluno');

btn_cadastraraluno.addEventListener('click', () => {

    window.location.href = 'Telacadastro_aluno.php';
});
//-------------------------------------------//


//-------------BOTÃO DE CADASTRO DE PROFESSOR-------------//

const btn_funcionarios = document.getElementById('btn_cadastrarprof');

btn_cadastrarprof.addEventListener('click', () => {

    window.location.href = 'Telacadastro_professor.php';
});

