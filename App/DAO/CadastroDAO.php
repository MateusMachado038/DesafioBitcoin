<?php

class CadastroDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_CadBitcoin";
        $this->conexao = new PDO($dsn, 'root', '');
    }

    /**
     * Método que recebe um model e extrai os dados do model para realizar o insert
     */
    public function insert(CadastroModel $model)
    {
        $sql = "INSERT INTO dt_cadastro (nome, email, senha, valorBC) VALUES (?, ?, ?, ?) ";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->valorBC);

        $stmt->execute();
    }

    /**
     * Método que retorna todas os registros da tabela pessoa no banco de dados.
     */
    public function select()
    {
        $sql = "SELECT * FROM dt_cadastro";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
