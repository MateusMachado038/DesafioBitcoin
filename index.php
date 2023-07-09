<?php

include './App/Controller/CadastroController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/desafioBitcoin/':
        echo "Inicio";
        break;

    case '/desafioBitcoin/App/cadastro':
        CadastroController::index();
        break;

    case '/desafioBitcoin/App/cadastro/form':
        CadastroController::index();
        break;

    case '/desafioBitcoin/App/cadastro/lista':
        CadastroController::listar();
        break;

    case '/desafioBitcoin/App/cadastro/form/save':
        echo "save";
        CadastroController::save();
        break;

    default:
        echo $url;
        break;
}
