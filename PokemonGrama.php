<?php
require_once("Pokemon.php");
require_once("InterfacePassiva.php");

class PokemonGrama extends Pokemon implements InterfacePassiva{

  public function ativarPassiva(){
    $danoPassivo = (int)($this->hpAtual * 0.10);
    $this->receberDano($danoPassivo);
    echo "                {$this->nome} SOFREU {$danoPassivo} DE DANO!\n";
    echo "                       +--------------+\n\n";
  }
}