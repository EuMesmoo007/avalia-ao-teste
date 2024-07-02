<?php
class Cliente {
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $idade;

    public function __construct($nome, $email, $telefone, $endereco, $idade) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->idade = $idade;
    }

    public function enviarEmailPromocional($mensagem) {
        echo "Enviando email para {$this->email}: {$mensagem}\n";
    }

    public function calcularAnoNascimento() {
        return date('Y') - $this->idade;
    }

    public function getNome() {
        return $this->nome;
    }
}
?>