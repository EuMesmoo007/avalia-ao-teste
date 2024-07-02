<?php
class Pedido {
    private $numero;
    private $data;
    private $cliente;
    private $produtos;
    private $total;

    public function __construct($numero, $data, $cliente, $produtos) {
        $this->numero = $numero;
        $this->data = $data;
        $this->cliente = $cliente;
        $this->produtos = $produtos;
        $this->calcularTotal();
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
        $this->calcularTotal();
    }

    public function calcularTotal() {
        $this->total = 0;
        foreach ($this->produtos as $produto) {
            $this->total += $produto->calcularTotal(1); 
        }
    }

    public function imprimirResumo() {
        echo "Pedido número {$this->numero}\n";
        echo "Data: {$this->data}\n";
        echo "Cliente: {$this->cliente->getNome()}\n";
        echo "Total do pedido: R$ {$this->total}\n";
    }
}
?>