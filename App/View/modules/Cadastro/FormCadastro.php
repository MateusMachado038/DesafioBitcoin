<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/desafioBitCoin-php/publico/css/style.css">

</head>

<body>
    <header>
        <div class="container-fluid containerMain">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/index.html">
                            <img src="" alt="" class="img-fluid" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="" id="navItem">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="" id="navItem">Listar Cadastros</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="container titlePadding">
                <p class="h5" id="lauchComing">Lorem ipsum dolor sit.</p>

                <p class="h1">Lorem, ipsum.</p>

                <button type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</button>

            </div>
        </div>
    </header>

    <section class="formContainer">
        <div class="container formCad">
            <div class="row">
                <div class="col mt-5">
                    <h1>Novo usuario</h1>
                    <form method="post" action="/desafioBitcoin/App/save">

                        <div class="form-floating mb-3">
                            <input id="nome" name="nome" class="form-control" type="text" placeholder="nome" />
                            <label for="nome">Nome</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="email" name="email" class="form-control" placeholder="email" type="email" />
                            <label for="email">E-mail:</label>
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input id="senha" name="senha" class="form-control" type="text" />
                        </div>

                        <div class="form-group">
                            <div id="divTal"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid footer">
        <span class="me-5 copyOBC">OneBitCode &copy; 2021</span>
        <a href="https://www.instagram.com/onebitcode/?hl=en" target="blank" class="me-4">Instagram</a>
        <a href="https://www.youtube.com/channel/UC44Mzz2-5TpyfklUCQ5NuxQ" class="me-4">YouTube</a>
        <a href="https://twitter.com/onebitcode">Twitter</a>
    </footer>



    <script>
        async function getBitCoin() {
            const response = await fetch('https://api.coincap.io/v2/assets/bitcoin');
            const bitcoinValue = await response.json().then(corpo => {

                const contactSection = document.getElementById('divTal')

                const label = document.createElement('label')
                label.innerText = "Valor atual do BitCoin"

                const valorInp = document.createElement('input')

                const bitCoinPrice = parseFloat(corpo.data.priceUsd).toFixed(2)

                valorInp.value = parseFloat(bitCoinPrice).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });

                valorInp.name = "valorBC"
                valorInp.className = "form-control"

                contactSection.append(label, valorInp)


                console.log(corpo.data.priceUsd)
            });
        }
        getBitCoin()
    </script>

</body>

</html>