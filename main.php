<?php
require("EnumTipo.php");
require("EnumFraqueza.php");
require("EnumResistencia.php");
require("Menu.php");
require("InterfaceCombate.php");
require("Movimentos.php");
require("Pokemon.php");
require("Arcanine.php");
require("Blastoise.php");
require("Venusaur.php");

$blastoise = new Blastoise("BLASTOISE", EnumTipo::Agua, 79, EnumFraqueza::Grama, EnumResistencia::Fogo);
$arcanine = new Arcanine("ARCANINE", EnumTipo::Fogo, 90, EnumFraqueza::Agua, EnumResistencia::Grama);
$venosaur = new Venusaur("VENOSAUR", EnumTipo::Grama, 80, EnumFraqueza::Fogo, EnumResistencia::Agua);

Menu::printaMenu($blastoise, $arcanine, $venosaur);
