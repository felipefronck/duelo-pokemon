<?php
require_once("Pokemon.php");
require_once("InterfacePassiva.php");

class PokemonAgua extends Pokemon implements InterfacePassiva{

  public function ativarPassiva(){
    $curaPassiva = (int)($this->hp * 0.10);
    $this->hpAtual += $curaPassiva;
    if ($this->hpAtual > $this->calcVida($this->hpAtual)) { // Não exceder a vida máxima
        $this->hpAtual = $this->calcVida($this->hpAtual);
    }
    echo "                 {$this->nome} RECUPEROU {$curaPassiva} DE HP!\n";
    echo "                       +--------------+\n\n";
  }
}