<?php

class Menu{

  public static function printaMenu($blastoise, $arcanine, $venosaur){
    echo "+-----------------------------------------------------------+\n";
    echo "|                       DUELO POKEMON                       |\n";
    echo "+-----------------------------------------------------------+\n";
    echo "|                         JOGADOR 1                         |\n";
    echo "|                                                           |\n";
    echo "|        [1] BLASTOISE   [2] ARCANINE   [3] VENOSAUR        |\n";
    echo "+-----------------------------------------------------------+\n";
    
    $jogador1 = trim(readline());

    switch($jogador1){
      case 1:
        $jogador1 = $blastoise;
        break;
      case 2:
        $jogador1 = $arcanine;
        break;
      case 3:
        $jogador1 = $venosaur;
        break;
      // case default tem que ser desenvolvido
    }
    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n";
    echo "|              JOGADOR 1: ".$jogador1->getNome()." ESCOLHIDO!               |\n";
    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n\n";
  
    echo "+-----------------------------------------------------------+\n";
    echo "|                       DUELO POKEMON                       |\n";
    echo "+-----------------------------------------------------------+\n";
    echo "|                         JOGADOR 2                         |\n";
    echo "|                                                           |\n";
    echo "|        [1] BLASTOISE   [2] ARCANINE   [3] VENOSAUR        |\n";
    echo "+-----------------------------------------------------------+\n";
    
    $jogador1 = trim(readline());

    switch($jogador1){
      case 1:
        $jogador1 = $blastoise;
        break;
      case 2:
        $jogador1 = $arcanine;
        break;
      case 3:
        $jogador1 = $venosaur;
        break;
      // case default tem que ser desenvolvido
    }
    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n";
    echo "|              JOGADOR 2: ".$jogador1->getNome()." ESCOLHIDO!               |\n";
    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n\n";
  }
}