<?php



class CadastroController
{

    public static function index()
    {
        include './App/View/modules/Cadastro/FormCadastro.php';
    }

    public static function listar()
    {
        include './App/View/modules/Cadastro/ListaCadastro.php';
    }

    public static function save()
    {
        include '../Model/CadastroModel.php';

        $model = new CadastroModel();

        $model->id =  $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->valorBC = $_POST['valorBC'];

        $model->save();

        header("Location: /desafioBitcoin/App/cadastro");
    }
}
