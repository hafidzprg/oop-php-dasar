<?php
// contoh class mahasiswa start
class Mahasiswa {
  public $nama; // untuk class mahasiswa ini menggunakan properti untuk menginisialisasi method yang akan di panggil di dalal class
  public $umur;
  public $alamat;

  public function tampil() {
    echo "<h3>Data Mahasiswa</h3>
      <ul>
        <li>Nama : $this->nama</li>
        <li>Umur : $this->umur</li>
        <li>Alamat : $this->alamat</li>
      </ul>
    ";
  }
}
$mhs = new Mahasiswa();
$mhs->nama = "Hafidz Usman";
$mhs->umur = 23;
$mhs->alamat = "Wayame";
$mhs->tampil();

$mhs2 = new Mahasiswa();
$mhs2->nama = "Jumadin";
$mhs2->umur = 30;
$mhs2->alamat = "Pohon Pule";
$mhs2->tampil();

$mhs3 = new Mahasiswa();
$mhs3->nama = "Agus";
$mhs3->umur = 20;
$mhs3->alamat = "Silale";
$mhs3->tampil();
// contoh class mahasiswa end


echo"<br>";

// class brand start
class Brand {
      // sedangkan di class brand tidak mengguakan properti untuk memanggil nama brandnya, dst. tetapi mengharapkan argument pada method print
  public function print($namaBrand, $jenisBrand, $brainAmbassador ,$stok) {
    return "<h3>Branding</h3>
      <ul>
        <li>Nama Brand : $namaBrand</li>
        <li>Jenis Brand : $jenisBrand</li>
        <li>Brand Ambassador : $brainAmbassador</li>
        <li>Ready Stok : $stok</li>
      </ul>
    ";
  }
  public function print2($namaBrand, $jenisBrand, $brainAmbassador ,$stok) {
    return "
      <ul>
        <li>Nama Brand : $namaBrand</li>
        <li>Jenis Brand : $jenisBrand</li>
        <li>Brand Ambassador : $brainAmbassador</li>
        <li>Ready Stok : $stok</li>
      </ul>
    ";
  }
  public function print3($namaBrand, $jenisBrand, $brainAmbassador ,$stok) {
    return "
      <ul>
        <li>Nama Brand : $namaBrand</li>
        <li>Jenis Brand : $jenisBrand</li>
        <li>Brand Ambassador : $brainAmbassador</li>
        <li>Ready Stok : $stok</li>
      </ul>
    ";
  }
}

$branding = new Brand();
echo $branding->print("Seiko 5", "Arloji", "Hafidz Usman", "Ada");

$branding2 = new Brand();
echo $branding2->print2("Iphone 16 Pro Max", "Smartphone", "Putri Nanda", "Habis");

$branding3 = new Brand();
echo $branding3->print3("Eau De Perfume", "Parfum/Minyak Wangi", "Shah Rukh Khan", "Ada");
// class brand end

