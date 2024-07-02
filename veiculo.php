<?php
class Veiculo {
    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $cor;
    private $preco;

    public function __construct($marca, $modelo, $anoFabricacao, $cor, $preco) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
        $this->cor = $cor;
        $this->preco = $preco;
    }

    public function calcularIdade() {
        $anoAtual = date('Y');
        return $anoAtual - $this->anoFabricacao;
    }

    public function calcularDepreciacao($anosDeUso) {
        return $this->preco * 0.02 * $anosDeUso; 
    }

    public function getMarca() {
        return $this->marca;
    }
}
?>