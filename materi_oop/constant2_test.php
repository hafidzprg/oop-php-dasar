<?php
include("constant2.php");

Sayuran::setNama("Bayam");
Sayuran::setJenis("Sayuran yang berserat");
Sayuran::setManfaat("Melancarkan buang air besar");

Sayuran::getNama();
Sayuran::getJenis();
Sayuran::getManfaat();

echo Sayuran::cetakInfoSayur();
echo Sayuran::validasi();

echo"<br>";



echo Kendaraan::getMobil();
Kendaraan::hasilValidasi();
echo "<br>";
echo Kendaraan::validasiGetMobil();