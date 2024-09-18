<?php

interface InterfaceCombate{
  public function calculaAtaqueBasico($ataque);
  public function calculaAtaqueEspecial($ataque);
  public function calculaDefesaBasica($defesa);
  public function calculaDefesaEspecial($defesa);
}