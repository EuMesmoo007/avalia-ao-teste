<?php
class Funcionario {
    private $nome;
    private $cargo;
    private $salario;
    private $dataContratacao;
    private $departamento;

    public function __construct($nome, $cargo, $salario, $dataContratacao, $departamento) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->dataContratacao = $dataContratacao;
        $this->departamento = $departamento;
    }

    public function calcularTempoTrabalho() {
        $hoje = new DateTime();
        $contratacao = new DateTime($this->dataContratacao);
        $diferenca = $hoje->diff($contratacao);
        return $diferenca->y . " anos, " . $diferenca->m . " meses";
    }

    public function promover($novoCargo) {
        $this->cargo = $novoCargo;
    }

    public function getSalario() {
        return $this->salario;
    }
}
?>