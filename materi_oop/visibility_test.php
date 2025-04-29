<?php

include("visibility.php");

// inisialisasi objek
$newGame = new Game("Zuma", "Lempar Bola", "Ada");
$newInherit = new InheritGame();
$printInfo = new DataGame();
$overriding = new Overriding("Mobile Legends", "Perang", "Ada", "Rp.1.000.000", 100);
// inisialisasi objek

echo"<h3 style='margin-left: 5rem;'>Data Game Class Object Parent</h3>";
echo$printInfo->infoGame($newGame);
echo"<hr>";

echo"<h3 style='margin-left: 5rem;'>Data Game Inheritance</h3>";
echo$printInfo->infoGame($newGame);
echo$newInherit->infoGame($newGame);
echo"<hr>";

echo"<h3 style='margin-left: 5rem;'>Data Game Overriding</h3>";
echo$overriding->infoGame();
echo"<hr>";

$overriding->promoGame = 300;

echo $overriding->promoGame;