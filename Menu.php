<?php

class Menu{

  public static function menuInicial($blastoise, $arcanine, $venosaur){
    echo "\n\n";
    echo "+--+----{+}----+----{+}----+-----+----{+}----+----{+}----+--+\n";
    echo "|                       DUELO POKEMON                       |\n";
    echo "+-{+}----+----{+}----+-----+-----+-----+----{+}----+----{+}-+\n\n";

    echo "+-----------------------------------------------------------+\n";
    echo "|              JOGADOR 1 - ESCOLHA SEU POKEMON              |\n";
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
      default:
        echo "+---------------------OPÇÃO INVÁLIDA----------------------+\n";
    }

    echo "          -<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->-\n";
    echo "               JOGADOR 1: {$jogador1->nome} ESCOLHIDO!\n";
    echo "          -<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->-\n\n";
  
    echo "+-----------------------------------------------------------+\n";
    echo "|                         JOGADOR 2                         |\n";
    echo "|                                                           |\n";
    echo "|        [1] BLASTOISE   [2] ARCANINE   [3] VENOSAUR        |\n";
    echo "+-----------------------------------------------------------+\n";
    
    $jogador2 = trim(readline());

    switch($jogador2){
      case 1:
        $jogador2 = $blastoise;
        break;
      case 2:
        $jogador2 = $arcanine;
        break;
      case 3:
        $jogador2 = $venosaur;
        break;
      default:
        echo "+---------------------OPÇÃO INVÁLIDA----------------------+\n";
    }

    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n";
    echo "|              JOGADOR 2: {$jogador2->nome} ESCOLHIDO!               |\n";
    echo "<-<-<-<-<-<-<-<-<-<-<-<-<-<-<->->->->->->->->->->->->->->->->\n\n";

    return ["jogador1" => $jogador1, "jogador2" => $jogador2];
  }
}