<?php
// parent class start
class TokoRohim {
  public $idBarang;
  public $namaBarang;
  public $tglMasuk;
  public $hargaBarang;

  public function __construct($idBarang, $namaBarang, $tglMasuk, $hargaBarang) {
    $this->idBarang = $idBarang;
    $this->namaBarang = $namaBarang;
    $this->tglMasuk = $tglMasuk;
    $this->hargaBarang = $hargaBarang;
  }
}
// parent class end


class TampilInfo {
  public function printInfo($data) {
    return"
    <ul>
      <li>ID Barang : $data->idBarang</li>
      <li>Nama Barang : $data->namaBarang</li>
      <li>Tanggal Masuk : $data->tglMasuk</li>
      <li>Harga Barang : $data->hargaBarang</li>
    </ul>";
  }
}
// class untuk menammpilkan parent class start


// inisialisasi barang sembako start
class Barang extends TokoRohim {
  public $tglKadaluarsa;

  public function __construct($idBarang, $namaBarang, $tglMasuk, $hargaBarang, $tglKadaluarsa) {
    parent::__construct($idBarang, $namaBarang, $tglMasuk, $hargaBarang);
    $this->tglKadaluarsa = $tglKadaluarsa;
    // $this->idBarang = $idBarang;
    // $this->namaBarang = $namaBarang;
    // $this->tglMasuk = $tglMasuk;
    // $this->hargaBarang = $hargaBarang;
    // $this->tglKadaluarsa = $tglKadaluarsa;
  }
  public function print(Barang $data) {
    return"
    <ul>
      <li>ID Barang : $data->idBarang</li>
      <li>Nama Barang : $data->namaBarang</li>
      <li>Tanggal Masuk : $data->tglMasuk</li>
      <li>Harga Barang : $data->hargaBarang</li>
      <li>Tanggal Kadaluarsa : $this->tglKadaluarsa</li>
    </ul>";
  }
  // public function print() {
  //   return"
  //   <ul>
  //     <li>ID Barang : $this->idBarang</li>
  //     <li>Nama Barang : $this->namaBarang</li>
  //     <li>Tanggal Masuk : $this->tglMasuk</li>
  //     <li>Harga Barang : $this->hargaBarang</li>
  //     <li>Tanggal Kadaluarsa : $this->tglKadaluarsa</li>
  //   </ul>";
  // }
}
// inisialisasi barang sembako end




// inisialisasi barang non sembako start
class Barang2 extends TokoRohim {
  public $beratBarang;
  public function __construct($idBarang, $namaBarang, $tglMasuk, $hargaBarang, $beratBarang) {
    parent::__construct($idBarang, $namaBarang, $tglMasuk, $hargaBarang);
    $this->beratBarang = $beratBarang;
  }
  public function print(Barang2 $data) {
    return"
    <ul>
      <li>ID Barang : $data->idBarang</li>
      <li>Nama Barang : $data->namaBarang</li>
      <li>Tanggal Masuk : $data->tglMasuk</li>
      <li>Harga Barang : $data->hargaBarang</li>
      <li>Berat Barang : $this->beratBarang</li>
    </ul>";
  }
  // public function print() {
  //   return"
  //   <ul>
  //     <li>ID Barang : $this->idBarang</li>
  //     <li>Nama Barang : $this->namaBarang</li>
  //     <li>Tanggal Masuk : $this->tglMasuk</li>
  //     <li>Harga Barang : $this->hargaBarang</li>
  //     <li>Berat Barang : $this->beratBarang</li>
  //   </ul>";
  // }
}
// inisialisasi barang non sembako end