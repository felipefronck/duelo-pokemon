<?php

class PokemonAgua extends Pokemon{
  
  public function calculaVida($hp) {
    $vida = (((31 * 2) / 4 + $hp + 100) / 100) * 50 + 10 + 50;
    return $vida;
  }

  public function calculaAtaqueBasico($ataque){
    $danoAtaqueBasico = ((2 * $ataque + 31) * 50/100) + 5;
    return $danoAtaqueBasico;
  }

  public function calculaAtaqueEspecial($ataque){
    
  }

  public function calculaDefesaBasica($defesa){
    
  }

  public function calculaDefesaEspecial($defesa){
    
  }
}