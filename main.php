<?php
require("class.Pokemon.php");
require("class.Arcanine.php");
require("class.Blastoise.php");
require("class.Venusaur.php");
require("class.Movimentos.php");

$blastoise = new Blastoise("BLASTOISE", EnumTipo::Agua, 79, EnumTipo::Grama, EnumTipo::Fogo);
$arcanine = new Arcanine("ARCANINE", EnumTipo::Fogo, 90, EnumTipo::Agua, EnumTipo::Grama);
$venosaur = new Venusaur("VENUSAUR", EnumTipo::Grama, 80, EnumTipo::Fogo, EnumTipo::Agua);

echo "nova batalha pokemon:\n escolha o jogador 1: \n";
echo "[1] = blastoise [2] = arcanine [3] = venosaur";
