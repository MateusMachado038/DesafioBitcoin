<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac Coin - Lista</title>
    <link rel="shortcut icon" href="http://localhost/desafioBitcoin/publico/images/bitcoinIcon.png" type="image/x-icon">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- arquivos css e js-->
    <link rel="stylesheet" href="http://localhost/desafioBitcoin/publico/css/common/style.css">
    <link rel="stylesheet" href="http://localhost/desafioBitcoin/publico/css/pages/listar/listarCad.css">
    <script defer src="http://localhost/desafioBitcoin/publico/js/listar/listarCad.js"></script>

    <!-- CDN Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lib text  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <header>
        <div class="container-fluid containerMain">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/desafioBitcoin/App/">
                            <span class="logo">Mac <span class="logo2">Coin</span></span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/desafioBitcoin/App/" id="navItem">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/desafioBitcoin/App/listar" id="navItem">Listar Cadastros</a>
                                </li>
                            </ul>

                        </div>
                        <form class="form-inline my-2 my-lg-0 d-none d-lg-block">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        </form>
                    </div>
                </nav>

            </div>
            <div class="container titlePadding" data-aos="fade-right" data-aos-duration="1000">
                <p class="h5" id="lauchComing"> Transações financeiras ponto a ponto</p>

                <p class="h1">Livre e descentralizada</p>

                <button type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</button>

            </div>
        </div>
    </header>

    <section class="sectionMain">
        <div class="container listCad" data-aos="flip-up" data-aos-duration="2000">
            <table class='table table-hover table-striped table-bordered table-dark'>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Bc</th>
                </tr>

                <?php foreach ($model->rows as $item) : ?>
                    <tr>

                        <td><?= $item->id ?></td>
                        <td><?= $item->nome ?></td>
                        <td><?= $item->email ?></td>
                        <td><?= $item->senha ?></td>
                        <td><?= $item->valorBC ?></td>
                    </tr>
                <?php endforeach ?>


                <?php if (count($model->rows) == 0) : ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif ?>

            </table>
        </div>
    </section>

    <footer class="container-fluid footer">
        <span class="me-5 copyOBC"> &copy; 2023</span>
        <a href="" target="blank" class="me-4">Instagram <i class="fa-brands fa-instagram" style="color: #ff0505;"></i></a>
        <a href="" class="me-4">YouTube <i class="fa-brands fa-youtube" style="color: #ff0000;"></i></a>
        <a href="">Twitter <i class="fa-brands fa-twitter" style="color: #2695fd;"></i></a>
    </footer>

    <!-- Lib text script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>