<?php

abstract class Movimentos{
  protected string $nome;
  protected int $poder;
  protected EnumTipo $tipoAtaque;
  protected EnumTipo $tipoPokemon;

  public function calculaDanoBasico($tipoAtaque, $tipoPokemon, $poder, $danoAtaqueBasico, $absorcaoDefesaBasica){
    if($tipoAtaque == $tipoPokemon){
      $multiplicador = 1.5;
    } 


    $danoMovimento = (50 * 0.4 + 2 * $poder * ($danoAtaqueBasico/ $absorcaoDefesaBasica)) * $multiplicador;
    return $danoMovimento;
  }

}