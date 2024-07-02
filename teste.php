<?php
require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'Pedido.php';
require_once 'Funcionario.php';
require_once 'Veiculo.php';



$cliente = new Cliente("Maria Silva", "maria@gmail.com", "(11) 9999-8888", "Rua A, 123", 24);
$cliente->enviarEmailPromocional("Confira nossas promoções especiais!");
echo "Ano de nascimento do cliente: " . $cliente->calcularAnoNascimento() . " anos\n";


$produto = new Produto("Smartphone", 1500.00, "Eletrônicos", "Smartphone top de linha", 50);
echo "Descrição do produto: " . $produto->getDescricao() . "\n";
$produto->reporEstoque(10);


$pedido = new Pedido(1, date('Y-m-d'), $cliente, [$produto]);
$produto2 = new Produto("Notebook", 3500.00, "Informática", "Notebook ultrafino", 20);
$pedido->adicionarProduto($produto2);
$pedido->imprimirResumo();


$funcionario = new Funcionario("João Oliveira", "Analista de Sistemas", 5000.00, "2010-05-15", "TI");
echo "Tempo de trabalho do funcionário: " . $funcionario->calcularTempoTrabalho() . "\n";
$funcionario->promover("Gerente");


$veiculo = new Veiculo("Toyota", "Corolla", 2018, "Prata", 80000.00);
echo "Idade do veículo: " . $veiculo->calcularIdade() . " anos\n";
echo "Depreciação do veículo após 3 anos: R$ " . $veiculo->calcularDepreciacao(3) . "\n";