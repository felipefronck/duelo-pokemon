<?php

abstract class Movimentos{
  public string $nome;
  public int $poder;
  public EnumTipo $tipoAtaque;
  public EnumTipo $tipoPokemon;

//   public function calculaMultiplicador($tipoAtaque, $tipoPokemon, $poder, $danoAtaqueBasico, $absorcaoDefesaBasica){
//     if($tipoAtaque == $tipoPokemon){
//       $multiplicador = 1.5;
//     } else if ($tipoAtaque == pokemon2->getFraqueza()){
//       $multiplicador = 2;
//     } else if ($tipoAtaque == $tipoPokemon && $tipoAtaque == pokemon2->getFraqueza()){
//       $multiplicador = 3.5;  
//     }

//     $danoMovimento = (50 * 0.4 + 2 * $poder * ($danoAtaqueBasico/ $absorcaoDefesaBasica)) * $multiplicador;
//     return $danoMovimento;
//   }
}