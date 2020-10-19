//Buscar informaçoes de unico funcionario.
$.ajax({
    url: "http://localhost/projetos/Formulario-car/tipo-carros.php/?tipo=" + tipo.value,
    type: 'GET',
    success: function (data) {
        tipos = data
        limpaResetCarros();
        createCarros(tipos);
        getPreco(tipo.value);

    },
    error: function (data) {
        alert('Erro ao chamar requisiçao')
    }

});