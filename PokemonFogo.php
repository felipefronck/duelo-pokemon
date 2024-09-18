<?php
require_once("Pokemon.php");
require_once("InterfacePassiva.php");

class PokemonFogo extends Pokemon implements InterfacePassiva{

  public function ativarPassiva(){
    $this->ataque *= 1.5;
    echo "            {$this->nome} AUMENTOU SEU ATAQUE EM 1.5X\n";
    echo "                       +--------------+\n\n";
  }
}