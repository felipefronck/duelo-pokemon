<?php

class Movimento{
  public string $nome;
  public int $poder;
  public string $tipoAtaque;

  function __construct(string $nome, int $poder, string $tipoAtaque){
    $this->nome = $nome;
    $this->poder = $poder;
    $this->tipoAtaque = $tipoAtaque;
  }
}