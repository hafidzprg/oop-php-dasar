<?php
include("inheritance.php");

$benzema = new Player("Karim Benzema", "Penyerang", "Perancis", "180cm", "1 Milion Dolars");
$rossi = new Player("Valentino Rossi", "Pemain Tikungan", "Italia", "190cm", "2 Milion Dolars");
$taufik = new Player("Taufik Hidayat", "Orientasi Backend Grip", "Indonesia", "170cm", "Rp.100.000.000");

$cetakInfo = new cetakInfoPemain();
echo"<h3 style='margin-left: 3rem;'>List Data Player</h3>";
echo$cetakInfo->cetakInfoPlayer($benzema);
echo$cetakInfo->cetakInfoPlayer($taufik);
echo$cetakInfo->cetakInfoPlayer($rossi);


$cetakInfoDetail = new infoDetailPemain("Valentino Rossi", "Pemain Tikungan", "Italia", "190cm", "2 Milion Dolars");
$taufik = new infoDetailPemain("Taufik Hidayat", "Orientasi Backend Grip", "Indonesia", "170cm", "Rp.100.000.000");
echo"<h3 style='margin-left: 3rem;'>List Data Lengkap Player Menggunakan Inheritance</h3>";

echo$cetakInfo->cetakInfoPlayer($benzema);
echo$cetakInfoDetail->dataLengkapPemain($rossi);
echo$cetakInfoDetail->dataLengkapPemain2($taufik);

// $cetakPemain = new cetakInfoPemain();
// echo"<h3 style='margin-left: 4rem;'>List Data Pemain Bola</h3>";

// echo$cetakPemain->cetakInfoPlayer($benzema);
// echo$cetakPemain->cetakInfoPlayer($messi);
// echo "<hr/>";

// $zidane = new coachPelatih("Zinedine Zidane", "10 Tahun", "Perancis");
// $sirAlex = new coachPelatih("Alex Ferguson", "20 Tahun", "Inggris");

// echo"<h3 style='margin-left: 4rem;'>List Data Pelatih Bola</h3>";
// $cetakPelatih = new cetakInfoPelatih();

// echo $cetakPelatih->cetakInfoCoach($zidane);
// echo $cetakPelatih->cetakInfoCoach($sirAlex);