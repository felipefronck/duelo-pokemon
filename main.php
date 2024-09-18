<?php
require_once("Menu.php");
require_once("Duelo.php");
require_once("Pokemon.php");
require_once("PokemonAgua.php");
require_once("PokemonFogo.php");
require_once("PokemonGrama.php");
require_once("Movimento.php");

class Main {
  public static function dueloPokemon(){

    $blastoiseMovimentos = [
      new Movimento("TACKLE", 40, "BÁSICO", "FÍSICO"),
      new Movimento("WATER PULSE", 60, "AGUA", "ESPECIAL"),
      new Movimento("HYDRO PUMP", 110, "AGUA", "ESPECIAL")
    ];

    $arcanineMovimentos = [
      new Movimento("EMBER", 40, "BÁSICO", "FÍSICO"),
      new Movimento("FIRE FANG", 65, "FOGO", "ESPECIAL"),
      new Movimento("FLAMETHEOWER", 90, "FOGO", "ESPECIAL")
    ];

    $venosaurMovimentos = [
      new Movimento("TACKLE", 40, "BÁSICO", "FÍSICO"),
      new Movimento("RAZOR LEAF", 55, "GRAMA", "ESPECIAL"),
      new Movimento("POWER WHIP", 120, "GRAMA", "ESPECIAL")
    ];

    $blastoise = new PokemonAgua("BLASTOISE", 79, "AGUA", "GRAMA", "FOGO", 83, 100, 85, 105, $blastoiseMovimentos);
    $arcanine = new PokemonFogo("ARCANINE", 90, "FOGO", "AGUA", "GRAMA", 110, 80, 100, 80, $arcanineMovimentos);
    $venosaur = new PokemonGrama("VENOSAUR", 80, "GRAMA", "FOGO", "AGUA", 82, 83, 100, 100, $venosaurMovimentos);

    $jogadores = Menu::menuInicial($blastoise, $arcanine, $venosaur);
    $jogador1 = $jogadores["jogador1"];
    $jogador2 = $jogadores["jogador2"];

    $duelo = new Duelo($jogador1, $jogador2);
    $duelo-> inicioDuelo($jogador1, $jogador2);
  }
}

Main::dueloPokemon();