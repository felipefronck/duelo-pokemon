<?php

abstract class Pokemon extends Movimentos implements InterfaceCombate{
  public string $nome;
  public EnumTipo $tipoPokemon;
  public int $hp;
  public EnumFraqueza $fraqueza;
  public EnumResistencia $resistencia;

  function __construct(string $nome, EnumTipo $tipoPokemon, int $hp, EnumFraqueza $fraqueza, EnumResistencia $resistencia){
    $this->nome = $nome;
    $this->tipoPokemon = $tipoPokemon;
    $this->hp = $hp;
    $this->fraqueza = $fraqueza;
    $this->resistencia = $resistencia;
  }

  public function calculaVida(int $hp){
    $vidaTotal = (((31 * 2) / 4 + $hp + 100) / 100) * 50 + 10 + 50;
    return $vidaTotal;
  }

  public function setNome(string $nome){
    $this->nome = $nome;
  }
  public function getNome(){
    return $this->nome;
  }
  
  public function setTipo(EnumTipo $tipoPokemon){
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

  public function setFraqueza(EnumFraqueza $fraqueza){
    $this->fraqueza = $fraqueza;
  }
  public function getFraqueza(){
    return $this->fraqueza;
  }

  public function setResistencia(EnumResistencia $resistencia){
    $this->resistencia = $resistencia;
  }
  public function getResistencia(){
    return $this->resistencia;
  }
}