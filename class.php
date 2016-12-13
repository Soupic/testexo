<?php

class Game
{

  protected $player = new Player();

  public function party()
  {

    echo "1- Pierre" . PHP_EOL;
    echo "2- Papier" . PHP_EOL;
    echo "3- Ciseaux" . PHP_EOL;

    $option = "$ ";

    if (PHP_OS == 'WINNT') {
      echo $option;
      $reponse = stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
      $reponse = readline($option);
    }



    switch ($reponse){
      case 1:
      $reponse = $player->computer();
      break;
      case 2:
      $reponse = $player->computer();
      break;
      case 3:
      $reponse = $player->computer();
      break;
    }

    return $reponse . PHP_EOL;
  }


}

class Player
{
  public function computer()
  {
    $choice = rand(1, 3);
    return $choice;
  }
}

 ?>
