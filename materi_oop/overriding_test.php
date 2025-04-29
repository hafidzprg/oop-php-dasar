<?php
include("overriding.php");

$boxing = new Olahraga("Boxing", "Olahraga Berat", "Mike Tyson", "60 Menit");

$mma = new Olahraga("MMA", "Olahraga Berat", "Khabib Nurmagumedov", "2 Jam") ;

$reyes = new Olahraga("Biliards", "Olahraga Ringan Cenderung Santai", "Efren Bata Reyes", "6 Jam");

// inheritance 
$inheritance = new InheritanceOlahraga("Null");

$print = new printInfoOlahraga();


echo"<h3 style='margin-left: 3rem;'>Info Olahraga</h3>";
echo$print->printInfo($boxing);
echo$print->printInfo($mma);

// inheritance
echo "<hr>";
echo"<h3 style='margin-left: 3rem;'>Inheritance Info Olahraga</h3>";
echo$inheritance->dataMma($boxing);
echo$inheritance->dataBiliar($reyes);