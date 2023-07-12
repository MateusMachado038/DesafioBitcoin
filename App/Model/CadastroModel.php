<?php

class CadastroModel
{

    public $id, $nome, $email, $senha, $valorBC;

    /**
     * Propriedade que armazenará o array retornado da DAO com a listagem das pessoas.
     */
    public $rows;

    /**
     * Declaração do método save que chamará a DAO para gravar no banco de dados
     * o model preenchido.
     */
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
