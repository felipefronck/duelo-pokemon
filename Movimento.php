<?php
require_once("InterfaceMovimento.php");

class Movimento implements InterfaceMovimento{
  public string $nome;
  public int $poder;
  public string $tipoAtaque;
  public string $modoAtaque;

  function __construct(string $nome, int $poder, string $tipoAtaque, string $modoAtaque){
    $this->nome = $nome;
    $this->poder = $poder;
    $this->tipoAtaque = $tipoAtaque;
    $this->modoAtaque = $modoAtaque;
  }

  public function __toString(){
    return $this->nome;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getPoder(){
    return $this->poder;
  }

  public function getTipoAtaque(){
    return $this->tipoAtaque;
  }

  public function getModoAtaque(){
    return $this->modoAtaque;
  }
}