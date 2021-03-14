var erroCampoCadastro = false;

$(document).ready(function(){

    cadastrarUsuario();
    cpf();
    cnpj();

});

function cadastrarUsuario(){

    $("#bCadastrarUsuario").click(function(){

        erroCampoCadastro = false
        validaCampoCadastro("input_name");
        validaCampoCadastro("input_birthDate");
        validaCampoCadastro("input_email");
        validaCampoCadastro("input_password");
        validaCampoCadastro("input_cardNumber");
        validaCampoCadastro("input_cardNumber");
        validaCampoCadastro("input_CPF");
        validaCampoCadastro("input_CNPJ");
        validarSenha();

        if (erroCampoCadastro == false){
            alert("Salvo");
            limparCampos();
        }else{
            alert("Preencher campos Obrigatorios")
        }
   

});
}

function validaCampoCadastro(campoCadastro){
    var campo = ($("#" + campoCadastro).val());
    
    if (campo == ""){
        $("#" + campoCadastro).addClass("campo-obrig");
        erroCampoCadastro = true;    
    }else {
        $("#" + campoCadastro).removeClass("campo-obrig");
}
}

function cpf(){

    $("#bCPF").click(function(){

        $("#formCadastroPessoa").html("");

        var conteudo = "";

        conteudo += '<input type="number" id="input_CPF" class="form-Cadastro" name="CPF" placeholder="CPF">';

        $("#formCadastroPessoa").append(conteudo)

        });  

}

function cnpj(){

    $("#bCNPJ").click(function(){

        $("#formCadastroPessoa").html("");

        var conteudo = "";

        conteudo += '<input type="number" id="input_CNPJ" class="form-Cadastro" name="CNPJ" placeholder="CNPJ">';

        $("#formCadastroPessoa").append(conteudo)

        

    });  

}

function validarSenha(){

    var senha = $("#input_password").val();
    var confirmarSenha = $("#input_passwordConfirm").val();

    if (senha != ""){
        if (senha != confirmarSenha){
            $("#input_passwordConfirm").addClass("campo-obrig");
            erroCampoCadastro = true;
        }
    }

}

function limparCampos(){
    $("#input_name").val("");
    $("#input_birthDate").val("");
    $("#input_email").val("");
    $("#input_password").val("");
    $("#input_cardNumber").val("");
    $("#input_cardNumber").val("");
    $("#input_CPF").val("");
    $("#input_CNPJ").val("");


}

