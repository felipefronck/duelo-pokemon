<?php
require("Menu.php");
require("InterfaceCombate.php");
require("Movimento.php");
require("Pokemon.php");
require("PokemonAgua.php");
require("PokemonFogo.php");
require("PokemonGrama.php");

$blastoiseMovimentos = [
  new Movimento("TACKLE", 40, "FÍSICO"),
  new Movimento("WATER PULSE", 60, "ESPECIAL"),
  new Movimento("HYDRO PUMP", 110, "ESPECIAL")
];

$arcanineMovimentos = [
  new Movimento("EMBER", 40, "FÍSICO"),
  new Movimento("FIRE FANG", 65, "ESPECIAL"),
  new Movimento("FLAMETHEOWER", 90, "ESPECIAL")
];

$venosaurMovimentos = [
  new Movimento("TACKLE", 40, "FISICO"),
  new Movimento("RAZOR LEAF", 55, "ESPECIAL"),
  new Movimento("POWER WHIP", 120, "ESPECIAL")
];

$blastoise = new PokemonAgua("BLASTOISE", 79, "Agua", "Grama", "Fogo", 83, 100, 85, 105, $blastoiseMovimentos);
$arcanine = new PokemonFogo("ARCANINE", 90, "Fogo", "Agua", "Grama", 110, 80, 100, 80, $arcanineMovimentos);
$venosaur = new PokemonGrama("VENOSAUR", 80, "Grama", "Fogo", "Agua", 82, 83, 100, 100, $venosaurMovimentos);

var_dump($blastoiseMovimentos);
var_dump($arcanineMovimentos);
var_dump($venosaurMovimentos);
Menu::printaMenu($blastoise, $arcanine, $venosaur);