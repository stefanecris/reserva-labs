var inputNome = document.getElementById('inputNome');
var labelNome = document.getElementById('labelNome');
var mensagemErroValidaNome = document.getElementById('mensagemErroValidaNome');
var inputId = document.getElementById('inputId');
var labelId = document.getElementById('labelId');
var mensagemErroValidaId = document.getElementById('mensagemErroValidaId');
var inputEmail = document.getElementById('inputEmail');
var labelEmail = document.getElementById('labelEmail');
var mensagemErroValidaEmail = document.getElementById('mensagemErroValidaEmail');
var inputSenha = document.getElementById('inputSenha');
var labelSenha = document.getElementById('labelSenha');
var mensagemErroValidaSenha = document.getElementById('mensagemErroValidaSenha');
var inputConfirmarSenha = document.getElementById('inputConfirmarSenha');
var labelConfirmarSenha = document.getElementById('labelConfirmarSenha');

var inputAreaAtuacao = document.getElementById('inputAreaAtuacao');
var labelAreaAtuacao = document.getElementById('labelAreaAtuacao');
var mensagemErroValidaAreaAtuacao = document.getElementById('mensagemErroValidaAreaAtuacao');
var inputCurso = document.getElementById('inputCurso');
var labelCurso = document.getElementById('labelCurso');
var mensagemErroValidaCurso = document.getElementById('mensagemErroValidaCurso');
var inputPeriodo = document.getElementById('inputPeriodo');
var labelPeriodo = document.getElementById('labelPeriodo');
var mensagemErroValidaPeriodo = document.getElementById('mensagemErroValidaPeriodo');
var inputDepartamento = document.getElementById('inputDepartamento');
var labelDepartamento = document.getElementById('labelDepartamento');
var mensagemErroValidaDepartamento = document.getElementById('mensagemErroValidaDepartamento');

var mostrarSenha = document.getElementById('fa-eye-senha');
var ocultarSenha = document.getElementById('fa-eye-slash-senha');
var mostrarConfirmarSenha = document.getElementById('fa-eye-confirmarSenha');
var ocultarConfirmarSenha = document.getElementById('fa-eye-slash-confirmarSenha');

var radioProfessor = document.getElementById('professor');
var radioAluno = document.getElementById('aluno');
var radioServidor = document.getElementById('servidor');

var camposProfessor = document.getElementById('camposProfessor');
var camposAluno = document.getElementById('camposAluno');
var camposServidor = document.getElementById('camposServidor');

var btnCadastrar = document.getElementById('btnCadastrar');
var btnLimpar = document.getElementById('btnLimpar');

mostrarSenha.addEventListener('click', exibeSenha);
ocultarSenha.addEventListener('click', ocultaSenha);
mostrarConfirmarSenha.addEventListener('click', exibeConfirmarSenha);
ocultarConfirmarSenha.addEventListener('click', ocultaConfirmarSenha);

radioProfessor.addEventListener('change', exibeCamposProfessor);
radioAluno.addEventListener('change', exibeCamposAluno);
radioServidor.addEventListener('change', exibeCamposServidor);
btnCadastrar.addEventListener('click', cadastrar);
btnLimpar.addEventListener('click', limpar);

document.addEventListener("keypress", function(e) {
    if(e.key === 'Enter') {
        btnCadastrar.click();
    }
});

var mensagemSucesso = document.getElementById('mensagemSucesso');

var validaNome, validaId, validaEmail, validaSenha, validaRadio, validaAreaAtuacao, validaCurso, validaPeriodo, validaDepartamento;

function exibeCamposProfessor(){
    if(radioProfessor.checked){
        camposProfessor.style.display = 'block';
        camposAluno.style.display = 'none';
        limparCamposAluno();
        camposServidor.style.display = 'none';
        limparCamposServidor();
    }else{
        camposProfessor.style.display = 'none';
    }
}

function exibeCamposAluno(){
    if(radioAluno.checked){
        camposAluno.style.display = 'block';
        camposProfessor.style.display = 'none';
        limparCamposProfessor();
        camposServidor.style.display = 'none';
        limparCamposServidor();
    }else{
        camposAluno.style.display = 'none';
    }
}

function exibeCamposServidor(){
    if(radioServidor.checked){
        camposServidor.style.display = 'block';
        camposProfessor.style.display = 'none';
        limparCamposProfessor();
        camposAluno.style.display = 'none';
        limparCamposAluno();
    }else{
        camposServidor.style.display = 'none';
    }
}

function exibeSenha(){
    inputSenha.type = "text";
    mostrarSenha.style.display = "none";
    ocultarSenha.style.display = "block";
}

function ocultaSenha(){
    inputSenha.type = "password";
    mostrarSenha.style.display = "block";
    ocultarSenha.style.display = "none";
}

function exibeConfirmarSenha(){
    inputConfirmarSenha.type = "text";
    mostrarConfirmarSenha.style.display = "none";
    ocultarConfirmarSenha.style.display = "block";
}

function ocultaConfirmarSenha(){
    inputConfirmarSenha.type = "password";
    mostrarConfirmarSenha.style.display = "block";
    ocultarConfirmarSenha.style.display = "none";
}

function validarDados(){
    if(inputNome.value == ""){
        validaNome = false;
        labelNome.style.color = "red";
        labelNome.style.borderBottom = "1px solid red";
        mensagemErroValidaNome.innerHTML = "Digite o nome";
        document.addEventListener('mousedown', (event) => {
            if(inputNome.contains(event.target)){
                mensagemErroValidaNome.innerHTML = "";
            }else if(inputNome.value == ""){
                mensagemErroValidaNome.innerHTML = "Digite o nome";
            }
        });
    }else{
        validaNome = true;
        labelNome.style.color = "black";
        labelNome.style.borderBottom = "1px solid black";
        mensagemErroValidaNome.innerHTML = "";
    }
    if(inputId.value == ""){
        validaId = false;
        labelId.style.color = "red";
        labelId.style.borderBottom = "1px solid red";
        mensagemErroValidaId.innerHTML = "Digite o RA/SIAPE";
        document.addEventListener('mousedown', (event) => {
            if(inputId.contains(event.target)){
                mensagemErroValidaId.innerHTML = "";
            }else if(inputId.value == ""){
                mensagemErroValidaId.innerHTML = "Digite o RA/SIAPE";
            }
        });
    }else{
        validaId = true;
        labelId.style.color = "black";
        labelId.style.borderBottom = "1px solid black";
        mensagemErroValidaId.innerHTML = "";
    }
    if(inputEmail.value == ""){
        validaEmail = false;
        labelEmail.style.color = "red";
        labelEmail.style.borderBottom = "1px solid red";
        mensagemErroValidaEmail.innerHTML = "Digite o endereço de e-mail";
        document.addEventListener('mousedown', (event) => {
            if(inputEmail.contains(event.target)){
                mensagemErroValidaEmail.innerHTML = "";
            }else if(inputEmail.value == ""){
                mensagemErroValidaEmail.innerHTML = "Digite o endereço de e-mail";
            }
        });
    }else{
        validaEmail = true;
        labelEmail.style.color = "black";
        labelEmail.style.borderBottom = "1px solid black";
        mensagemErroValidaEmail.innerHTML = "";
    }
    if(inputSenha.value == ""){
        validaSenha = false;
        labelSenha.style.color = "red";
        labelSenha.style.borderBottom = "1px solid red";
        mensagemErroValidaSenha.innerHTML = "Digite uma senha";
        document.addEventListener('mousedown', (event) => {
            if(inputSenha.contains(event.target)){
                mensagemErroValidaSenha.innerHTML = "";
            }else if(inputSenha.value == ""){
                mensagemErroValidaSenha.innerHTML = "Digite uma senha";
            }
        });
    }else if(inputConfirmarSenha.value == ""){
        validaSenha = false;
        labelConfirmarSenha.style.color = "red";
        labelConfirmarSenha.style.borderBottom = "1px solid red";
        mensagemErroValidaSenha.innerHTML = "Confirme sua senha";
        document.addEventListener('mousedown', (event) => {
            if(inputConfirmarSenha.contains(event.target)){
                mensagemErroValidaSenha.innerHTML = "";
            }else if(inputConfirmarSenha.value == ""){
                mensagemErroValidaSenha.innerHTML = "Confirme sua senha";
            }
        });
    }else if(inputSenha.value != inputConfirmarSenha.value){
        validaSenha = false;
        mensagemErroValidaSenha.innerHTML = "As senhas não são iguais. Tente novamente.";
    }else{
        validaSenha = true;
        labelSenha.style.color = "black";
        labelSenha.style.borderBottom = "1px solid black";
        mensagemErroValidaSenha.innerHTML = "";
        labelConfirmarSenha.style.color = "black";
        labelConfirmarSenha.style.borderBottom = "1px solid black";
    }
    if(radioProfessor.checked == false && radioAluno.checked == false && radioServidor.checked == false){
        validaRadio = false;
        mensagemErroRadio.innerHTML = "Selecione uma opção";
        radioProfessor.addEventListener('change', () => {
            if(radioProfessor.checked || radioAluno.checked || radioServidor.checked){
                mensagemErroRadio.innerHTML = "";
            }else{
                mensagemErroRadio.innerHTML = "Selecione uma opção";
            }
        });
        radioAluno.addEventListener('change', () => {
            if(radioProfessor.checked || radioAluno.checked || radioServidor.checked){
                mensagemErroRadio.innerHTML = "";
            }else{
                mensagemErroRadio.innerHTML = "Selecione uma opção";
            }
        });
        radioServidor.addEventListener('change', () => {
            if(radioProfessor.checked || radioAluno.checked || radioServidor.checked){
                mensagemErroRadio.innerHTML = "";
            }else{
                mensagemErroRadio.innerHTML = "Selecione uma opção";
            }
        });
    }else{
        mensagemErroRadio.innerHTML = "";
        validaRadio = true;
    }
    if(radioProfessor.checked){
        if(inputAreaAtuacao.value == ""){
            validaAreaAtuacao = false;
            labelAreaAtuacao.style.color = "red";
            labelAreaAtuacao.style.borderBottom = "1px solid red";
            mensagemErroValidaAreaAtuacao.innerHTML = "Digite a área de atuação";
            document.addEventListener('mousedown', (event) => {
                if(inputAreaAtuacao.contains(event.target)){
                    mensagemErroValidaAreaAtuacao.innerHTML = "";
                }else if(inputAreaAtuacao.value == ""){
                    mensagemErroValidaAreaAtuacao.innerHTML = "Digite a área de atuação";
                }
            });
        }else{
            validaAreaAtuacao = true;
            labelAreaAtuacao.style.color = "black";
            labelAreaAtuacao.style.borderBottom = "1px solid black";
            mensagemErroValidaAreaAtuacao.innerHTML = "";
        }
    }
    if(radioAluno.checked){
        if(inputCurso.value == ""){
            validaCurso = false;
            labelCurso.style.color = "red";
            labelCurso.style.borderBottom = "1px solid red";
            mensagemErroValidaCurso.innerHTML = "Digite o curso";
            document.addEventListener('mousedown', (event) => {
                if(inputCurso.contains(event.target)){
                    mensagemErroValidaCurso.innerHTML = "";
                }else if(inputCurso.value == ""){
                    mensagemErroValidaCurso.innerHTML = "Digite o curso";
                }
            });
        }else{
            validaCurso = true;
            labelCurso.style.color = "black";
            labelCurso.style.borderBottom = "1px solid black";
            mensagemErroValidaCurso.innerHTML = "";
        }
        if(inputPeriodo.value == ""){
            validaPeriodo = false;
            labelPeriodo.style.color = "red";
            labelPeriodo.style.borderBottom = "1px solid red";
            mensagemErroValidaPeriodo.innerHTML = "Digite o período";
            document.addEventListener('mousedown', (event) => {
                if(inputPeriodo.contains(event.target)){
                    mensagemErroValidaPeriodo.innerHTML = "";
                }else if(inputPeriodo.value == ""){
                    mensagemErroValidaPeriodo.innerHTML = "Digite o período";
                }
            });
        }else{
            validaPeriodo = true;
            labelPeriodo.style.color = "black";
            labelPeriodo.style.borderBottom = "1px solid black";
            mensagemErroValidaPeriodo.innerHTML = "";
        }
    }else if(radioServidor.checked){
        if(inputDepartamento.value == ""){
            validaDepartamento = false;
            labelDepartamento.style.color = "red";
            labelDepartamento.style.borderBottom = "1px solid red";
            mensagemErroValidaDepartamento.innerHTML = "Digite o departamento";
            document.addEventListener('mousedown', (event) => {
                if(inputDepartamento.contains(event.target)){
                    mensagemErroValidaDepartamento.innerHTML = "";
                }else if(inputDepartamento.value == ""){
                    mensagemErroValidaDepartamento.innerHTML = "Digite o departamento";
                }
            });
        }else{
            validaDepartamento = true;
            labelDepartamento.style.color = "black";
            labelDepartamento.style.borderBottom = "1px solid black";
            mensagemErroValidaDepartamento.innerHTML = "";
        }
    }
}

function cadastrar(){
    var usuario;

    validarDados();

    if(validaNome && validaId && validaEmail && validaSenha && validaRadio){
        if(radioProfessor.checked){
            if(validaAreaAtuacao){
                usuario = {
                    nome: inputNome.value, 
                    id: inputId.value, 
                    email: inputEmail.value,
                    senha: inputSenha.value,
                    tipo: "Professor",
                    areaAtuacao: inputAreaAtuacao.value
                }
                limpar();
                exibeMensagemSucesso();
            }
        }else if(radioAluno.checked){
            if(validaCurso && validaPeriodo){
                usuario = {
                    nome: inputNome.value, 
                    id: inputId.value, 
                    email: inputEmail.value,
                    senha: inputSenha.value,
                    tipo: "Aluno",
                    curso: inputCurso.value,
                    periodo: inputPeriodo.value
                }
                limpar();
                exibeMensagemSucesso();
            }
        }else if(radioServidor.checked){
            if(validaDepartamento){
                usuario = {
                    nome: inputNome.value, 
                    id: inputId.value, 
                    email: inputEmail.value,
                    senha: inputSenha.value,
                    tipo: "Servidor",
                    departamento: inputDepartamento.value
                }
                limpar();
                exibeMensagemSucesso();
            }
        }
    }

    envioDados(usuario);

}

function envioDados(usuario){
    var ajax = new XMLHttpRequest();
    if(usuario.tipo == "Professor"){
        var url = "salvaUsuarioProfessor.php";
    }else if(usuario.tipo == "Aluno"){
        var url = "salvaUsuarioAluno.php";
    }else if(usuario.tipo == "Servidor"){
        var url = "salvaUsuarioServidor.php";
    }
    
    var usuarioJSON = JSON.stringify(usuario); 

    ajax.open("POST", url, true);

    ajax.setRequestHeader("Content-Type", "application/json");

    ajax.send(usuarioJSON);

    ajax.onreadystatechange = function () {
        if(ajax.readyState === 4 && ajax.status === 200){
            
        }

        
    }

}

function limpar(){
    inputNome.value = "";
    inputId.value = "";
    inputEmail.value = "";
    inputSenha.value = "";
    inputConfirmarSenha.value = "";
    if(radioProfessor.checked){
        limparCamposProfessor();
        radioProfessor.checked = false;
        camposProfessor.style.display = 'none';
    }else if(radioAluno.checked){
        limparCamposAluno();
        radioAluno.checked = false;
        camposAluno.style.display = 'none';
    }else if(radioServidor.checked){
        limparCamposServidor();
        radioServidor.checked = false;
        camposServidor.style.display = 'none';
    }
}

function limparCamposProfessor(){
    inputAreaAtuacao.value = "";
}

function limparCamposAluno(){
    inputCurso.value = "";
    inputPeriodo.value = "";
}

function limparCamposServidor(){
    inputDepartamento.value = "";
}

function exibeMensagemSucesso(){
    mensagemSucesso.style.display = 'block';
}