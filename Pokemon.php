<?php

abstract class Pokemon{
  public string $nome;
  public int $hp;
  public float $hpAtual;
  public string $tipoPokemon;
  public string $fraqueza;
  public string $resistencia;
  public int $ataque;
  public int $defesa;
  public int $ataqueEspecial;
  public int $defesaEspecial;
  public $movimentos;
  
  
  public function __construct(string $nome, int $hp, string $tipoPokemon, string $fraqueza, string $resistencia, int $ataque, int $defesa, int $ataqueEspecial, int $defesaEspecial, array $movimentos){
    $this->nome = $nome;
    $this->hp = $hp;
    $this->hpAtual = $this->calcVida($hp);
    $this->tipoPokemon = $tipoPokemon;
    $this->fraqueza = $fraqueza;
    $this->resistencia = $resistencia;
    $this->ataque = $this->calcStat($ataque);
    $this->defesa = $this->calcStat($defesa);
    $this->ataqueEspecial = $this->calcStat($ataqueEspecial);
    $this->defesaEspecial = $this->calcStat($defesaEspecial);
    $this->movimentos = $movimentos;
  }

  public function receberDano($dano){
    $this->hpAtual -= $dano;
    if($this->hpAtual < 0){
      $this->hpAtual = 0;
    }
  }

  public function calcVida($hp){
    return (int)(((31 * 2) / 4 + $hp + 100) / 100) * 50 + 10 + 50;
  }

  public function calcStat($stat){
    return (int)((2 * $stat + 31) * 50/100) + 5;
  }
}