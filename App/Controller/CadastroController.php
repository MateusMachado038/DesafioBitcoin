<?php



class CadastroController
{
    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function index()
    {
        include './App/View/modules/Cadastro/FormCadastro.php';
    }

    public static function listar()
    {
        include './App/Model/CadastroModel.php';

        $model = new CadastroModel();
        $model->getAllRows();

        include './App/View/modules/Cadastro/ListarCadastro.php';
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
        include './App/Model/CadastroModel.php';

        $model = new CadastroModel();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->valorBC = $_POST['valorBC'];

        $model->save();

        header("Location: /desafioBitcoin/App/listar");
    }
}
