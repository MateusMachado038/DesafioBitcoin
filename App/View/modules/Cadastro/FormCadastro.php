<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/desafioBitcoin/publico/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lib text  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <style>
        input[type="text"] {
            width: 100%;
            border: 2px solid #aaa;
            border-radius: 4px;
            margin: 8px 0;
            outline: none;
            padding: 8px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: dodgerBlue;
            box-shadow: 0 0 8px 0 dodgerBlue;
        }

        .inputWithIcon input[type="text"] {
            padding-left: 40px;
        }

        .inputWithIcon {
            position: relative;
        }

        .inputWithIcon i {
            position: absolute;
            left: 0;
            top: 15px;
            padding: 9px 8px;
            color: #1f1e1e;
            transition: 0.3s;
        }

        .inputWithIcon input[type="text"]:focus+i {
            color: dodgerBlue;
        }

        .inputWithIcon.inputIconBg i {
            background-color: #aaa;
            color: #fff;
            padding: 9px 4px;
            border-radius: 4px 0 0 4px;
        }

        .inputWithIcon.inputIconBg input[type="text"]:focus+i {
            color: #fff;
            background-color: dodgerBlue;
        }
    </style>


    <header>
        <div class="container-fluid containerMain">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/index.html">
                            <span class="logo">Mac <span class="logo2">Coin</span></span>
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
            <div class="container titlePadding" data-aos="fade-right" data-aos-duration="1000">
                <p class="h5" id="lauchComing">Lorem ipsum dolor sit.</p>

                <p class="h1">Lorem, ipsum.</p>

                <button type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</button>

            </div>
        </div>
    </header>

    <section class="formContainer">
        <div class="container formCad" data-aos="flip-up" data-aos-duration="2000">
            <div class="row">
                <div class="col mt-5">
                    <h1>Cadastro</h1>
                    <form method="post" action="/desafioBitcoin/App/save">
                        <div class="inputWithIcon">
                            <input type="text" placeholder="Nome" class="form-control" name="nome" id="nome">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </div>

                        <div class="inputWithIcon">
                            <input type="text" placeholder="Email" class="form-control" id="email" name="email">
                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                        </div>

                        <div class="inputWithIcon">
                            <input type="text" placeholder="Senha" class="form-control" id="senha" name="senha">
                            <i class="fa-solid fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </div>

                        <div class="inputWithIcon">
                            <div id="divTal"></div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid footer">
        <span class="me-5 copyOBC"> &copy; 2021</span>
        <a href="" target="blank" class="me-4">Instagram</a>
        <a href="" class="me-4">YouTube</a>
        <a href="">Twitter</a>
    </footer>



    <script>
        async function getBitCoin() {
            const response = await fetch('https://api.coincap.io/v2/assets/bitcoin');
            const bitcoinValue = await response.json().then(corpo => {

                const contactSection = document.getElementById('divTal')


                const valorInp = document.createElement('input')
                const bitCoinPrice = parseFloat(corpo.data.priceUsd).toFixed(2)

                valorInp.value = parseFloat(bitCoinPrice).toLocaleString('pt-br', {
                    style: 'currency',
                    currency: 'BRL'
                });
                valorInp.type = "text"
                valorInp.name = "valorBC"
                valorInp.className = "form-control"
                valorInp.disabled = "true";

                const iconBit = document.createElement('i')
                iconBit.className = "fa-brands fa-bitcoin fa-lg fa-fw"
                iconBit.ariaHidden = "true";


                contactSection.append(valorInp, iconBit)


                console.log(corpo.data.priceUsd)
            });
        }
        getBitCoin()
    </script>

    <!-- Lib text script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>