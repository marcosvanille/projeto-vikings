$(document).ready(function () {
    $("#formulario").validate({
        /* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
        rules: {
            nome: {
                required: true, /* Campo obrigatório */
                minlength: 5    /* No mínimo 5 caracteres */
            },
            sobrenome: {
                required: true, /* Campo obrigatório */
                minlength: 5    /* No mínimo 5 caracteres */
            },
            email: {
                required: true, /* Campo obrigatório */
                email: true     /* Deverá ser um email válido */
            },

        },
        /* DEFINIÇÃO DAS MENSAGENS DE ERRO */
        messages: {
            nome: {
                required: "Preencha o campo <u>Nome</u>",
                minlength: "O campo <u>Nome</u> deve conter no mínimo 5 caracteres"
            },
            sobrenome: {
                required: "Preencha o campo <u>Sobrenome</u>",
                minlength: ""
            },
            email: {
                required: "Preencha o campo <u>Email</u>",
                email: "O campo <u>Email</u> só aceita emails válidos"
            },

        }
    });
});
//MASCARA DE TELEFONE
$('#fone').inputmask('(99) 9999[9]-9999');


$("#botao").click(function () {

    $.ajax({
        url: "http://localhost/projetos/formulario-GSbombas/teste-php/teste.php",
        type: 'POST',
        data: $('#formulario').serialize(),
        success: function (data) {
            alert('Cadastrado com sucesso!')
            console.log(data);
        },
        error: function (data) {
            alert('Erro ao chamar requisiçao')
        }

    });
    return false;

})