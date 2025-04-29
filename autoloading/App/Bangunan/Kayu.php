<?php
class Kayu extends Properti {
  private $stokProperti;

  

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti);
    $this->stokProperti = $stokProperti;
  }
  public function cetakInfoHargaKayu() {
    return $this->getHargaProperti();
  }

  public function cetakInfoStokKayu() {
    return $this->stokProperti;
  }

  public function cetakProperti() {
    return "<ul>
      <li>Nama Properti :". parent::getNamaProperti()."</li>
      <li>Jenis Properti :". $this->getJenisProperti()."</li>
      <li>Harga Properti :". $this->getHargaProperti()."</li>
      <li>Stok Properti : $this->stokProperti</li>
    </ul>";
  }

  

  public function cetakStokKayu() {
    return $this->cetakInfoStokKayu();
  }
  public function cetakHargaKayu() {
    return $this->cetakInfoHargaKayu();
  }

}