<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Bc</th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>

                <td><?= $item->id ?></td>
                <td><?= $item->nome ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->valorBC ?></td>
            </tr>
        <?php endforeach ?>


        <?php if (count($model->rows) == 0) : ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>

</body>

</html>

</body>

</html>