<?php

include './App/Controller/CadastroController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/desafioBitcoin/':
        CadastroController::index();
        break;

    case '/desafioBitcoin/App/':
        CadastroController::index();
        break;

    case '/desafioBitcoin/App/listar':
        CadastroController::listar();
        break;

    case '/desafioBitcoin/App/save':
        CadastroController::save();
        break;

    default:
        echo $url;
        break;
}
