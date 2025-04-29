<?php
// constructor

// 1. Menghitung luas persegi start
class Persegi {
  public $panjang;
  public $lebar;

  function __construct($panjang, $lebar) {
   $this->lebar = $lebar;
   $this->panjang = $panjang;
  }

  public function hasil() {
    return $this->panjang * $this->lebar;
  }
}

$persegi2 = new Persegi(20, 20);
echo $persegi2->hasil();

echo"<br>";

$persegi3 = new Persegi(10, 10);
echo $persegi3->hasil();
// menghitung luas persegi end

// toko sembako start
class TokoSembako {
  public $namaBarang, $jenisBarang, $tglKadaluarsa, $stok;

  public function __construct($namaBarang, $jenisBarang,  $tglKadaluarsa, $stok) {
    $this->namaBarang = $namaBarang; 
    $this->jenisBarang = $jenisBarang; 
    $this->tglKadaluarsa = $tglKadaluarsa; 
    $this->stok = $stok;
  }

  public function print() {
    return "<h3 style='margin-left: 4rem;'>Daftar Barang</h3>
        <ul>
          <li>Nama Barang  : $this->namaBarang</li>
          <li>Jenis Barang : $this->jenisBarang</li>
          <li>Tanggal Exp  : $this->tglKadaluarsa</li>
          <li>Stok Barang  : $this->stok</li>
        </ul>
    ";
  }
}
$beras = new TokoSembako(" Cap Dua Udang","Beras", "20 Desember 2025", "Ada");
echo $beras->print();

echo "<br>";

$gula = new TokoSembako("Gulaku","Gula Pasir", "20 Desember 2026", "Ada");
echo $gula->print();

echo "<br>";

$minyak = new TokoSembako("Bimoli","Minyak Kelapa", "12 Januari 2026", "Ada");
echo $minyak->print();
// toko sembako end

