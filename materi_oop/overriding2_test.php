<?php
include("overriding2.php");

// parent class start
$gula = new TokoRohim("1", "Gula", "10 Maret 2021", "Rp.20.000 Per Kg");
// parent class end
$printInfo = new TampilInfo();
echo"<h3 style='margin-left: 3rem;'>Data Produk Parent Class ( Class Object )</h3>";
echo$printInfo->printInfo($gula);
echo "<hr/>";
// parent class end



// child class start

// sembako start
$beras = new Barang("1" ,"Beras", "1 Januari 2024", "Rp.15.000 Per Kg", "1 Januari 2025");
$gula = new Barang("2" ,"Gula", "4 Januari 2024", "Rp.20.000 Per Kg", "1 Januari 2026");
// sembako end


// non sembako start
$panci = new Barang2("1","Panci Stainless Stell", "4 April 2020", "Rp.20.000", "3 Kg");
$sendok = new Barang2("2","Sendok Makan", "7 April 2020", "Rp.10.000", "5 Ons");
// non sembako end


echo"<h3 style='margin-left: 3rem;'>Data Produk Class Sembako ( Inheritance Overriding )</h3>";
echo$getLabelSembako = $beras->print($beras);
echo$overGula = $gula->print($gula);
echo "<hr/>";

echo"<h3 style='margin-left: 3rem;'>Data Produk Class Non Sembako ( Inheritance Overriding )</h3>";
echo$getLabelNonSembako = $panci->print($panci);
echo$overSendok = $sendok->print($sendok);


// echo$getLabelSembako;
// echo$overGula;



// echo$getLabelNonSembako;
// echo$overSendok;
echo "<hr/>";
// child class end


