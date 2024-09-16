<?php

abstract class Pokemon {
  protected string $nome;
  protected string $tipo;
  protected int $hp;
  protected EnumFraqueza $fraqueza;
  protected EnumResistencia $resistencia;

  function __construct(string $nome, string $tipo, int $hp, EnumFraqueza $fraqueza, EnumResistencia $resistencia){
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->hp = $hp;
    $this->fraqueza = $fraqueza;
    $this->resistencia = $resistencia;
  }

  public function calculaVida(){

  }
}