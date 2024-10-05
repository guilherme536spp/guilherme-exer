<?php

abstract class Bebida {
    protected $nome;
    protected $preco;

    
    abstract public function mostrarBebida();
    
    
    abstract public function verificarPreco($preco);
}


class Vinho extends Bebida {
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Vinho: $this->nome, Preço: $this->preco";
    }

    public function verificarPreco($preco) {
        return $preco < 25;
    }
}


class Refrigerante extends Bebida {
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Refrigerante: $this->nome, Preço: $this->preco";
    }

    public function verificarPreco($preco) {
        return $preco < 5;
    }
}


class Suco extends Bebida {
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Suco: $this->nome, Preço: $this->preco";
    }

    public function verificarPreco($preco) {
        return $preco < 2.5;
    }
}
?>
