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

    $('#botaoTelefone').click(function () {
        var idTel = Math.floor(Math.random() * 100);
        $('#tel').append($('<input>', {
            value: '',
            text: '',
            id: 'inputTel_' + idTel
        }));
        $('#tel').append($('<button>', {
            type: 'button',
            value: idTel,
            text: 'remover',
            class: 'buttonTelefone',
            id: 'buttonTel_' + idTel
        }));
        $('.buttonTelefone').click(function () {
            $( "#inputTel_" + this.value ).remove();
            $( "#buttonTel_" + this.value ).remove();
            console.log(this.value);
        })
    })

});


//MASCARA DE TELEFONE
$('#fone').inputmask('(99) 9999[9]-9999');


$("#botao").click(function () {

    $.ajax({
        url: "http://localhost/projetos/projeto-vikings/controllers/funcionario.php",
        type: 'POST',
        data: $('#formulario').serialize(),
        // data: {
        //     nome: $('#nome').val(),  pegando o valor via ajax e nao pelo metodo POST
        //     sobrenome: $('#sobrenome').val()
        // },
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






