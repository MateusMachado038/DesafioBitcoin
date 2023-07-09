<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/desafioBitcoin/App/':
        echo "Inicio";
        break;

    case '/desafioBitcoin/App/cadastro':
        echo "cadastro";
        break;

    case '/desafioBitcoin/App/cadastro/form':
        echo "form";
        break;

    case '/desafioBitcoin/App/cadastro/form/save':
        echo "save";
        break;

    default:
        echo $url;
        break;
}
