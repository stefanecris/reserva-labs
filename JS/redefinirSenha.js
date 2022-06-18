var inputId = document.getElementById('inputId');
var labelId = document.getElementById('labelId');
var mensagemErroValidaId = document.getElementById('mensagemErroValidaId');
var inputSenha = document.getElementById('inputSenha');
var labelSenha = document.getElementById('labelSenha');
var mensagemErroValidaSenha = document.getElementById('mensagemErroValidaSenha');
var inputConfirmarSenha = document.getElementById('inputConfirmarSenha');
var labelConfirmarSenha = document.getElementById('labelConfirmarSenha');
var btnAlterarSenha = document.getElementById('btnAlterarSenha');
var mensagemSucesso = document.getElementById('mensagemSucesso');

var mostrarSenha = document.getElementById('fa-eye-senha');
var ocultarSenha = document.getElementById('fa-eye-slash-senha');
var mostrarConfirmarSenha = document.getElementById('fa-eye-confirmarSenha');
var ocultarConfirmarSenha = document.getElementById('fa-eye-slash-confirmarSenha');

var validaId, validaSenha;

mostrarSenha.addEventListener('click', exibeSenha);
ocultarSenha.addEventListener('click', ocultaSenha);
mostrarConfirmarSenha.addEventListener('click', exibeConfirmarSenha);
ocultarConfirmarSenha.addEventListener('click', ocultaConfirmarSenha);

btnAlterarSenha.addEventListener('click', alterarSenha);

document.addEventListener("keypress", function(e) {
    if(e.key === 'Enter') {
        btnAlterarSenha.click();
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
        mensagemErroValidaSenha.innerHTML = "";
    }
}

function alterarSenha(){
    var usuario;

    validarDados();

    if(validaId && validaSenha){
        console.log("Dados válidos!");
        usuario = {
            id: inputId.value,
            senha: inputSenha.value
        }
        limpar();
        
    }

    envioDados(usuario);

}

function envioDados(usuario){
    
    var ajax = new XMLHttpRequest();
    var url = "redefinicaosenha.php";
    
    var usuarioJSON = JSON.stringify(usuario); 

    ajax.open("POST", url, true);

    ajax.setRequestHeader("Content-Type", "application/json");

    ajax.send(usuarioJSON);

    ajax.onreadystatechange = function () {
        if(ajax.readyState === 4 && ajax.status === 200){
            exibeMensagemSucesso();
        }
        
    }

}

function limpar(){
    inputId.value = "";
    inputSenha.value = "";
    inputConfirmarSenha.value = "";
}

function exibeMensagemSucesso(){
    mensagemSucesso.style.display = 'block';
}