<?php

class Venusaur extends Pokemon{
  
  public function __construct($nome, $tipo, $hp, $fraqueza, $resistencia){
    parent::__construct($nome, $tipo, $hp, $fraqueza, $resistencia);
  }

  public function ataqueBasico(){
    $ataque = 82;
    $danoAtaqueBasico = ((2 * $ataque + 31) * 50/100) + 5;
    return $danoAtaqueBasico; 
  }

  public function ataqueEspecial(){
    $ataqueEspecial = 100;
    $danoAtaqueEspecial = ((2 * $ataqueEspecial + 31) * 50/100);
    return $danoAtaqueEspecial;
  }

  public function defesaBasica(){
    $defesa = 83;
    $absorcaoDefesaBasica = ((2 * $defesa + 31) * 50/100);
    return $absorcaoDefesaBasica;
  }

  public function defesaEspecial(){
    $defesaEspecial = 100;
    $absorcaoDefesaEspecial = ((2 * $defesaEspecial + 31) * 50/100);
    return $absorcaoDefesaEspecial;
  }
}
