<?php

abstract class Pokemon extends Movimento implements InterfaceCombate{
  public string $nome;
  public int $hp;
  public string $tipoPokemon;
  public string $fraqueza;
  public string $resistencia;
  public int $ataque;
  public int $defesa;
  public int $ataqueEspecial;
  public int $defesaEspecial;
  public $movimentos = [];

  function __construct(string $nome, int $hp, string $tipoPokemon, string $fraqueza, string $resistencia, int $ataque, int $defesa, int $ataqueEspecial, int $defesaEspecial, array $movimentos = []){
    $this->nome = $nome;
    $this->hp = $hp;
    $this->tipoPokemon = $tipoPokemon;
    $this->fraqueza = $fraqueza;
    $this->resistencia = $resistencia;
    $this->ataque = $ataque;
    $this->defesa = $defesa;
    $this->ataqueEspecial = $ataqueEspecial;
    $this->defesaEspecial = $defesaEspecial;
    $this->movimentos = $movimentos;
  }

  abstract protected function calculaVida(int $hp);

  public function setNome(string $nome){
    $this->nome = $nome;
  }
  public function getNome(){
    return $this->nome;
  }
  
  public function setTipo(string $tipoPokemon){
    $this->tipoPokemon = $tipoPokemon;
  }
  public function getTipo(){
    return $this->tipoPokemon;
  }

  public function setHp(int $hp){
    $this->hp = $hp;
  }
  public function getHp(){
    return $this->hp;
  }

  public function setFraqueza(string $fraqueza){
    $this->fraqueza = $fraqueza;
  }
  public function getFraqueza(){
    return $this->fraqueza;
  }

  public function setResistencia(string $resistencia){
    $this->resistencia = $resistencia;
  }
  public function getResistencia(){
    return $this->resistencia;
  }
}