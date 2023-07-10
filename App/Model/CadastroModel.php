<?php

class CadastroModel
{

    public $id, $nome, $email, $senha, $valorBC;
    public $rows;

    public function save()
    {
        include './App/DAO/CadastroDAO.php';

        $dao = new CadastroDAO();
        $dao->insert($this);
    }

    public function getAllRows()
    {
        include './App/DAO/CadastroDAO.php';

        $dao = new CadastroDAO();

        $this->rows = $dao->select();
    }
}
