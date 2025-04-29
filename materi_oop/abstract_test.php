<?php

include("abstract.php");

// $obj = new Car("Gallardo");
Lamborghini::$namaMobil = "Gallardo";
echo Lamborghini::print();

echo"<br>";

Audi::$namaMobil = "Audi";

echo Audi::print();
