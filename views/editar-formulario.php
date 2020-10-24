<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/projetos/projeto-vikings/frontend/css/style.css">
</head>
<body>
<body class="bg">
<div class="container">

    <form action="" method="post" id="formulario">
        <h1 id="titulo">Alterar Cadastro de Funcionário</h1>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nome" class="lb">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="form-group col-md-4">
                <label for="nome" class="lb">Sobrenome </label>
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email" class="lb">Email:</label>
                <input type="email" class="form-control" name="email" id="email"/>
                <span id="error-email"></span>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1" class="lb">Adicionar Foto</label>
                    <input type="file" class="form-control-file lb" id="exampleFormControlFile1">
                </div>
            </form>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="fone" class="lb">Telefone</label>
                <input type="text" class="form-control" name="fone" id="fone" placeholder="Telefone" required>
                <button type="button" id="botaoTelefone" class="btn btn-warning">adicional</button>
                <div id="tel"></div>
            </div>
            <div class="form-group col-md-3">
                <label for="fone" class="lb">Cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" required>
            </div>
            <div class="form-group col-md-3">
                <label for="fone" class="lb">Cart.trabalho</label>
                <input type="text" class="form-control" name="cart" id="cart" placeholder="" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="endereco" class="lb">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="">
            </div>

            <div class="form-group col-md-3">
                <label for="inputAddress" class="lb">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCidade" class="lb">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="inputCidade">
            </div>
        </div>
        <div class="form-row">


            <div class="col-md-4">
                <label for="nome" class="lb">Sexo: </label>


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino"
                           value="m">
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="feminino"
                           value="f">
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>
            </div>
            <div class="col-md-4">
                <label for="nome" class="lb">Estado Civil: </label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="casado"
                           value="casado">
                    <label class="form-check-label" for="inlineRadio1">Casado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="solteiro"
                           value="solteiro">
                    <label class="form-check-label" for="inlineRadio2">Solteiro</label>
                </div>
            </div>
        </div>
        <button type="button" id="botao" class="btn btn-danger" >Alterar</button>
        <a href="lista.php" class="btn btn-primary">voltar</a></a>    </form>

</div>

<script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.5/jquery.inputmask.bundle.min.js"></script>
<script src="/projetos/projeto-vikings/frontend/js/alterar.js"></script>
</body>

</body>
</html>