<?php
require("class.php");

$start = True;

while ($start == True) {
  echo "Saisisez un chiffre pour lancer une partie" . PHP_EOL;
  echo "1- Lancer une partie" . PHP_EOL;
  echo "2- Quitter le jeu" . PHP_EOL;

  $option = "$ ";

  if (PHP_OS == 'WINNT') {
    echo $option;
    $reponse = stream_get_line(STDIN, 1024, PHP_EOL);
  } else {
    $reponse = readline($option);
  }


  if ($reponse == 1) {
    $partie = new Game();
    $computer = new Player();
    $partie->party();
  } elseif ($reponse == 2)
    $start = false;

    echo $reponse . PHP_EOL;

}


 ?>
