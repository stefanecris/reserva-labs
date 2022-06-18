var checkboxAnonimo = document.getElementById('checkboxAnonimo');
var naoAnonimo = document.getElementById('naoAnonimo');
var labelNome = document.getElementById('labelNome');
var mensagemErroValidaNome = document.getElementById('mensagemErroValidaNome');
var inputId = document.getElementById('inputId');
var labelId = document.getElementById('labelId');
var mensagemErroValidaId = document.getElementById('mensagemErroValidaId');
var inputEmail = document.getElementById('inputEmail');
var labelEmail = document.getElementById('labelEmail');
var mensagemErroValidaEmail = document.getElementById('mensagemErroValidaEmail');
var radioProfessor = document.getElementById('professor');
var radioAluno = document.getElementById('aluno');
var radioServidor = document.getElementById('servidor');
var mensagemErroRadio = document.getElementById('mensagemErroRadio');
var selectLab = document.getElementById('selectLab');
var mensagemErroValidaLab = document.getElementById('mensagemErroValidaLab');
var inputData = document.getElementById('data');
var divData = document.getElementById('animacao');
var mensagemErroValidaData = document.getElementById('mensagemErroValidaData');
var textareaDescricao = document.getElementById('textareaDescricao');
var textareaLabel =  document.getElementById('textareaLabel');
var mensagemErroValidaDescricao = document.getElementById('mensagemErroValidaDescricao');
var btnEnviar = document.getElementById('btnEnviar');
var btnLimpar = document.getElementById('btnLimpar');
var mensagemSucesso = document.getElementById('mensagemSucesso');

var validaNome, validaId, validaEmail, validaRadio, validaLab, validaData, validaDescricao;

checkboxAnonimo.addEventListener('change', exibicaoDivAnonimo);
btnEnviar.addEventListener('click', enviar);
btnLimpar.addEventListener('click', limpar);

document.addEventListener("keypress", function(e) {
    if(e.key === 'Enter') {
        btnEnviar.click();
    }
});

function exibicaoDivAnonimo(){
    if(checkboxAnonimo.checked){
        naoAnonimo.style.display = "none";
        limparCamposNaoAnonimo();
    }else{
        naoAnonimo.style.display = "block";
    }
}

function validarDados(){
    if(checkboxAnonimo.checked == false){
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
    }
    if(selectLab.value == ""){
        validaLab = false;
        selectLab.style.borderColor = "red";
        selectLab.style.color = "red";
        mensagemErroValidaLab.innerHTML = "Selecione um lab";
        document.addEventListener('mousedown', (event) => {
            if(selectLab.contains(event.target)){
                selectLab.style.borderColor = "gray";
                selectLab.style.color = "black";
                mensagemErroValidaLab.innerHTML = "";
            }else if(selectLab.value == ""){
                selectLab.style.borderColor = "red";
                selectLab.style.color = "red";
                mensagemErroValidaLab.innerHTML = "Selecione um lab";
            }
        });
    }else{
        validaLab = true;
        selectLab.style.borderColor = "gray";
        selectLab.style.color = "black";
        mensagemErroValidaLab.innerHTML = "";
    }
    if(data.value == ""){
        validaData = false;
        inputData.style.color = "red";
        divData.style.borderBottom = "1px solid red";
        mensagemErroValidaData.innerHTML = "Selecione uma data";
        document.addEventListener('mousedown', (event) => {
            if(inputData.contains(event.target)){
                inputData.style.color = "black";
                mensagemErroValidaData.innerHTML = "";
            }else if(inputData.value == ""){
                inputData.style.color = "red";
                mensagemErroValidaData.innerHTML = "Selecione uma data";
            }
        });
    }else{
        validaData = true;
        inputData.style.color = "black";
        divData.style.borderBottom = "1px solid black";
        mensagemErroValidaData.innerHTML = "";
    }
    if(textareaDescricao.value == ""){
        validaDescricao = false;
        textareaLabel.style.color = "red";
        textareaLabel.style.borderBottom = "1px solid red";
        mensagemErroValidaDescricao.innerHTML = "Digite uma descrição";
        document.addEventListener('mousedown', (event) => {
            if(textareaDescricao.contains(event.target)){
                mensagemErroValidaDescricao.innerHTML = "";
            }else if(textareaDescricao.value == ""){
                mensagemErroValidaDescricao.innerHTML = "Digite uma descrição";
            }
        });
    }else{
        validaDescricao = true;
        textareaLabel.style.color = "black";
        textareaLabel.style.borderBottom = "1px solid black";
        mensagemErroValidaDescricao.innerHTML = "";
    }
}

function enviar(){
    var reclamacao;

    validarDados();

    if(validaLab && validaData && validaDescricao){
        // console.log(checkboxAnonimo.value);
        if(checkboxAnonimo.checked){
            reclamacao = {
                tipo: "Anonimo",
                lab: selectLab.value,
                data: data.value, 
                descricao: textareaDescricao.value
            };
            
        }else{
            console.log("Ei, entrei aqui?");
            if(validaNome && validaId && validaEmail && validaRadio){
                console.log("Dados válidos!");
                var categoria;
                if(radioProfessor.checked){
                    categoria = "Professor";
                }else if(radioAluno.checked){
                    categoria = "Aluno";
                }else if(radioServidor.checked){
                    categoria = "Servidor";
                }
                reclamacao = {
                    nome: inputNome.value, 
                    id: inputId.value, 
                    email: inputEmail.value, 
                    tipo: categoria, 
                    lab: selectLab.value,
                    data: data.value, 
                    descricao: textareaDescricao.value
                };
            }
            
        }
    }

    envioDados(reclamacao);
    limpar();
}

function envioDados(reclamacao){
    var ajax = new XMLHttpRequest();

    console.log(reclamacao.tipo);

    if(reclamacao.tipo == "Professor"){
        var url = "reclamaProfessorSalva.php";
    }else if(reclamacao.tipo == "Aluno"){
        var url = "salvaReclamacaoAluno.php";
    }else if(reclamacao.tipo == "Servidor"){
        var url = "salvaReclamacaoServidor.php";
    }else if(reclamacao.tipo == "Anonimo"){
        var url = "salvaReclamacaoAnonimo.php";
    }
    
    var reclamacaoJSON = JSON.stringify(reclamacao); 

    ajax.open("POST", url, true);
    console.log(url);
    console.log(reclamacaoJSON);

    ajax.setRequestHeader("Content-Type", "application/json");

    ajax.send(reclamacaoJSON);

    ajax.onreadystatechange = function () {
        if(ajax.readyState === 4 && ajax.status === 200){
            exibeMensagemSucesso();
        }

        
    }
}

function limpar(){
    if(!checkboxAnonimo.checked){
        limparCamposNaoAnonimo();
    }else{
        checkboxAnonimo.checked = false;
        naoAnonimo.style.display = "block";
    }
    
    selectLab.value = "";
    data.value = "";
    textareaDescricao.value = "";
}

function limparCamposNaoAnonimo(){
    inputNome.value = "";
    inputId.value = "";
    inputEmail.value = "";
    radioProfessor.checked = false;
    radioAluno.checked = false;
    radioServidor.checked = false
}

function exibeMensagemSucesso(){
    mensagemSucesso.style.display = 'block';
    setTimeout(function() {
        mensagemSucesso.style.display = "none";
    }, 1000);
}