<?php 
class suco {
private $sabor;

    public function _construct($sabor) {

    }

    public function setsabor($sabor){
    $this->sabor = $sabor;

    }

    public function getsabor() {
        return $this->sabor;

        }

        public function mostrarbebida()
        return "nome $this->nome, preco: $this->preco, sabor: $this->sabor,";{

        }

        public function verificarpreco() {
        if ($this->preco < 50){
            return true;
        }else {

        }
    }     

}
?>