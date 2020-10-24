//Buscar informaçoes de unico funcionario.

var urlParams = new URLSearchParams(window.location.search);
// console.log(urlParams.get('id')); // "order"
var id = urlParams.get('id');
$.ajax({
    url: "http://localhost/projetos/projeto-vikings/controllers/funcionarioUnico.php?id=" + id,
    type: 'GET',
    success: function (data) {
        $('#nome').val(data[0].nome);
        $('#sobrenome').val(data[0].sobrenome);
        $('#email').val(data[0].email);
        $('#cpf').val(data[0].cpf);
        $('#cart').val(data[0].carteiraTrabalho);
        $('#endereco').val(data[0].endereco);
        $('#estado').val(data[0].estado);
        $('#inputCidade').val(data[0].cidade);
        $('#masculino').val(data[0].sexo);
        $('#feminino').val(data[0].sexo);
        console.log(data);
    },
    error: function (data) {
        alert('Erro ao chamar requisiçao')
    }

});

$("#botao").click(function () {

    $.ajax({
        url: "http://localhost/projetos/projeto-vikings/controllers/updateController.php?id=" + id ,
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