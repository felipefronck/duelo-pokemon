<?php
require_once("InterfaceDuelo.php");

class Duelo implements InterfaceDuelo{
  public $pokemon1;
  public $pokemon2;

  public function __construct($pokemon1, $pokemon2){
    $this->pokemon1 = $pokemon1;
    $this->pokemon2 = $pokemon2;
  }

  public function inicioDuelo(Pokemon $pokemon1, Pokemon $pokemon2){
    echo "+--+----{+}----+-----+-BATALHA-DEFINIDA-+-----+----{+}----+-+\n";
    echo "|                  {$pokemon1->nome}  VS  {$pokemon2->nome}                  |\n";
    echo "+-{+}----+----{+}----+-----+-----+-----+----{+}----+----{+}-+\n\n";
    
    $turno = 0; 
    
    while($pokemon1->hpAtual > 0 && $pokemon2->hpAtual > 0){
      $turno++;
      echo "                        -{{$turno}º TURNO}-\n\n";

      if($turno % 2 == 1){
        echo "                      +---------------+\n";
        echo "                          PASSIVA:\n";
        echo "                      +---------------+\n";
        $this->pokemon1->ativarPassiva();
        $this->selecionarMovimento($this->pokemon1, $this->pokemon2);
      } else {
        echo "                       +--------------+\n";
        echo "                          PASSIVA:\n";
        echo "                       +--------------+\n";
        $this->pokemon2->ativarPassiva();
        $this->selecionarMovimento($this->pokemon2, $this->pokemon1);
      }

      if($this->pokemon1->hpAtual <= 0){
        echo "+-----------------------------------------------------------+\n";
        echo "           {$this->pokemon1->nome} FOI DERROTADO\n";
        echo "+-----------------------------------------------------------+\n\n";
        echo "+-----------------------------------------------------------+\n";
        echo "           {$this->pokemon2->nome} VENCEU\n";
        echo "+---+------+------+------+------+------+------+------+------+\n";
        return;
      } else if($this->pokemon2->hpAtual <= 0){
        echo "+-----------------------------------------------------------+\n";
        echo "           {$this->pokemon2->nome} FOI DERROTADO\n";
        echo "+-----------------------------------------------------------+\n\n";
        echo "+---+------+------+------+------+------+------+------+------+\n";
        echo "              {$this->pokemon1->nome} VENCEU\n";
        echo "+---+------+------+------+------+------+------+------+------+\n";
        return;
      }
    }
  }

  public function selecionarMovimento(Pokemon $atacante, Pokemon $defensor){
    echo "+--------------------------STATS----------------------------+\n";
    echo "                          HP: {$atacante->hpAtual}\n";
    echo "        ATK: {$atacante->ataque}                      DEF: {$atacante->defesa}\n";
    echo "        ATK ESP: {$atacante->hpAtual}                   DEF ESP: {$atacante->ataque}\n";
    echo "+-----------------------------------------------------------+\n\n";

    echo "+-----------------------------------------------------------+\n";
    echo "              {$atacante->nome}, ESCOLHA SEU MOVIMENTO\n";
    echo "+-----------------------------------------------------------+\n\n";
    
    $i = 1;
    foreach($atacante->movimentos as $movimento){
      echo "[$i] - {$movimento->getNome()} | PODER: {$movimento->getPoder()} | TIPO: {$movimento->getTipoAtaque()}\n";
      $i++;
    }
    
    $valida = false;
    while(!$valida){
      $opcaoMovimento = trim(readline("MOVIMENTO: "));
      
      if(!empty($opcaoMovimento) && is_numeric($opcaoMovimento) && intval($opcaoMovimento) <= count($atacante->movimentos)){
        $opcao = intval($opcaoMovimento) - 1;
        $movimentoEscolhido = $atacante->movimentos[$opcao];
        $valida = true;
      } else {
        echo "              -{ESCOLHA INVÁLIDA}-\n";
      }
    }

    $this-> aplicarDano($atacante, $defensor, $movimentoEscolhido);
  }

  public function aplicarDano(Pokemon $atacante, Pokemon $defensor, Movimento $movimentoEscolhido){
    $multiplicador = 1.0;

    if($movimentoEscolhido->getTipoAtaque() == $atacante->tipoPokemon){
      $multiplicador *= 1.5;
      echo "+------+------+------+------BONUS--+------+------+------+---+\n";
      echo "             TIPO DO ATACANTE = TIPO DO ATAQUE\n";
      echo "+---+------+------+------+------+------+------+------+------+\n";
    }

    if($movimentoEscolhido->getTipoAtaque() == $defensor->fraqueza){
      $multiplicador *= 2.0;
      echo "+------+------+------+---MUITO-EFICAZ-----+------+------+---+\n";
      echo "           TIPO DO ATACANTE = FRAQUEZA DO DEFENSOR\n";
      echo "+---+------+------+------+------+------+------+------+------+\n\n";
    }else if ($movimentoEscolhido->getTipoAtaque() == $defensor->resistencia){
      $multiplicador *= 0.5;
      echo "+------+------+------+---POUCO-EFICAZ-----+------+------+---+\n";
      echo "          TIPO DO ATACANTE = RESISTENCIA DO DEFENSOR\n";
      echo "+---+------+------+------+------+------+------+------+------+\n\n";
    }

    if($movimentoEscolhido->getModoAtaque() == "FÍSICO"){
      $dano = (50 * 0.4 + 2 * $movimentoEscolhido->getPoder() * ($atacante->ataque / $defensor->defesa));
      return $dano;
    }else if ($movimentoEscolhido->getModoAtaque() == "ESPECIAL"){
      $dano =  (50 * 0.4 + 2 * $movimentoEscolhido->getPoder() * ($atacante->ataqueEspecial / $defensor->defesaEspecial));
    }

    $defensor->receberDano($dano);

    echo "+-----------------------------------------------------------+\n";
    echo "  {$atacante->nome} USOU {$movimentoEscolhido->getNome()}, CAUSANDO {$dano} DE DANO A {$defensor->nome}\n";
    echo "+-----------------------------------------------------------+\n";
    echo "          RESTOU {$defensor->hpAtual} DE HP PARA {$defensor->nome}\n";
    echo "+-----------------------------------------------------------+\n\n\n";
  }


}
