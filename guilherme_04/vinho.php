<?php
class Vinho {
   private $tipo;
   private $safra;
   
   public function __construct( $tipo,$safra) {
       $this->tipo = $tipo;
       $this->safra = $safra;
   }
 
 
   public function getTipo() {
       return $this->tipo;
   }
 
   public function getSafra() {
       return $this->safra;
   }
 
   public function mostrarVinho() {
       return "Nome: $this->nome, Tipo: $this->tipo, Preço: $this->preco, Safra: $this->safra";
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