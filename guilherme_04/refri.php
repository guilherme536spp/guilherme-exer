<?php
class Refri {
private $retornavel;
   
   public function __construct($retornavel) {
   
   }
 
       public function setretornavel($retornavel) {
    $this->retornavel = $retornavel;
       }
 
   public function getretornavel() {
       return $this->retornavel;
   }
 
   public function mostrarbebida() {
       return "Nome: $this->nome retornavel: $this->retornavel Preço: $this->preco";
   }
 
   public function verificarPreco() {
       if ($this->preco < 50) {
           return true;
       } else {
           return false;
       }
   }
}
?>