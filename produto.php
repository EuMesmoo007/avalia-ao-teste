<?php
class Produto {
    private $nome;
    private $preco;
    private $categoria;
    private $descricao;
    private $estoque;

    public function __construct($nome, $preco, $categoria, $descricao, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
        $this->estoque = $estoque;
    }

    public function calcularTotal($quantidade) {
        return $this->preco * $quantidade;
    }

    public function reporEstoque($quantidade) {
        $this->estoque += $quantidade;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}
?>