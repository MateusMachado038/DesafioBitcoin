<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Cadastro</legend>

        <form method="post" action="/desafioBitcoin/App/cadastro/form/save">

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="email">E-mail:</label>
            <input id="email" name="email" value="<?= $model->email ?>" type="email" />

            <label for="senha">Senhas:</label>
            <input id="senha" name="senha" value="<?= $model->email ?>" type="password" />

            <label for="valorBC">E-mail:</label>
            <input id="valorBC" name="valorBC" value="<?= $model->valorBC ?>" type="text" />

            <div id="divTal"></div>

            <button type="submit">Salvar</button>
        </form>
    </fieldset>

</body>

</html>