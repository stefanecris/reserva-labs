var inputId = document.getElementById('inputId');
var labelId = document.getElementById('labelId');
var mensagemErroValidaId = document.getElementById('mensagemErroValidaId');
var inputSenha = document.getElementById('inputSenha');
var labelSenha = document.getElementById('labelSenha');
var mensagemErroValidaSenha = document.getElementById('mensagemErroValidaSenha');
var mensagemErroLogin = document.getElementById('mensagemErroLogin');

var mostrarSenha = document.querySelector('.fa-eye');
var ocultarSenha = document.querySelector('.fa-eye-slash');

var btnLogin = document.getElementById('btnLogin');
var btnCadastrar = document.getElementById('btnCadastrar');

var validaId, validaSenha;

mostrarSenha.addEventListener('click', exibeSenha);
ocultarSenha.addEventListener('click', ocultaSenha);
btnLogin.addEventListener('click', login);
btnCadastrar.addEventListener('click', abrirCadastro);

document.addEventListener("keypress", function(e) {
    if(e.key === 'Enter') {
        btnLogin.click();
    }
});

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

function validarDados(){
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
    }else{
        validaSenha = true;
        labelSenha.style.color = "black";
        labelSenha.style.borderBottom = "1px solid black";
        mensagemErroValidaSenha.innerHTML = "";
    }
}

function login(){

    var usuario;

    validarDados();

    if(validaId && validaSenha){
        usuario = {
            id: inputId.value,
            senha: inputSenha.value
        }
        envioDados(usuario);
        limpar();
    }

}

function envioDados(usuario){

    var ajax = new XMLHttpRequest();
    var url = "autenticar.php";
    var usuarioJSON = JSON.stringify(usuario); 

    ajax.open("POST", url, true);

    ajax.setRequestHeader("Content-Type", "application/json");

    ajax.send(usuarioJSON);

    ajax.onreadystatechange = function () {
        if(ajax.readyState === 4 && ajax.status === 200){
            if(ajax.response == "Logou!"){
                mensagemErroLogin.style.display = "none";
                window.location.href = "agenda.php";
            }else{
                // window.location.href = "index.php";
                mensagemErroLogin.style.display = "block";
            }

        }
        
    }

}

function limpar(){
    inputId.value = "";
    inputSenha.value = "";
}

function abrirCadastro(){
    window.location.href = "cadastro.php";
}