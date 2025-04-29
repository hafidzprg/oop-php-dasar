<?php
include ("object_type.php");

//bentuk pemanggilan class dengan menggunakan file object_type.php secara terpisah start


//obj karyawan start
$hafidz = new Karyawan("Hafidz Usman", 23, "Rp.5.000.000,00");
$agung = new Karyawan("Agung Sangadji", 40, "Rp.10.000.000,00");
$nanda = new Karyawan("Nanda Aprilianty", 21, "Rp.7.000.000,00");
$Kurniawaty = new Karyawan("Kurniawaty Dwi Anjani", 23, "Rp.20.000.000,00");

echo $hafidz->print();
echo $agung->print();
echo $nanda->print();
echo $Kurniawaty->print();
//obj karyawan end


echo "<hr>";

//obj siswa start
$ahmad = new Siswa("Ahmad", 20, "Wayame");
$ramdhani = new Siswa("Ramdhani", 25, "Wayame");

echo $ahmad->print();
echo $ramdhani->print();

// obj siswa end

echo "<hr>";

// garis pembatas start
echo "<p>Batasan Untuk Cetak</p>";
// garis pembatas end


//menampilkan data dari class cetak start
$objCetak = new CetakDataSiswa();
echo $objCetak->print3($ahmad);
echo $objCetak->print3($ramdhani);
//menampilkan data dari class cetak start

echo "<hr>";
echo "<p>Batasan Untuk Cetak</p>";

//menampilkan data dari class cetak start
$objCetak = new CetakDataKaryawan();
echo $objCetak->print2($hafidz);
echo $objCetak->print2($agung);
echo $objCetak->print2($nanda);
echo $objCetak->print2($Kurniawaty);
//menampilkan data dari class cetak start
//bentuk pemanggilan class dengan menggunakan file object_type.php secara terpisah end