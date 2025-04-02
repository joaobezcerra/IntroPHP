<?php

require_once 'global.php';

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $categoria;

    public function __construct($id = null)
    {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT id,
                         nome,
                         preco,
                         quantidade,
                         categoria_id
                         FROM produtos
                         WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
        $produto = $stmt->fetch();
        $this->nome = $produto['nome'];
        $this->preco = $produto['preco'];
        $this->quantidade = $produto['quantidade'];
        $this->categoria_id = $produto['categoria_id'];
    }

    public function alterar()
    {
        $query = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade, categoria_id = :categoria_id WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }

    public static function listar()
    {
        $query = 'SELECT p.id,
                        p.nome,
                        p.preco,
                        p.quantidade,
                        p.categoria_id,
                        c.nome as categoria_nome
                        FROM produtos p
                        JOIN categorias c on (c.id = p.categoria_id)
                        ORDER BY p.nome
                        ';
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id)
                        VALUES (:nome, :preco, :quantidade, :categoria_id)";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM produtos WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }

    public static function listarPorCategoria($categoria_id)
    {
        $query = "SELECT id, nome, preco, quantidade FROM produtos WHERE categoria_id = :categoria_id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':categoria_id', $categoria_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
