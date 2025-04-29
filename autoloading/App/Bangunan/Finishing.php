<?php
class Finishing extends Kayu {
  
  private $jumlahProperti;

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti, $jumlahProperti) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti);
    $this->jumlahProperti = $jumlahProperti;
  }

  public function getJumlahProperti() {
    return $this->jumlahProperti;
  }
  
  public function finishing() {
    return "<ul>
      <li>Nama Properti : ". $this->getNamaProperti()."</li>
      <li>Jenis Properti : ". $this->getJenisProperti()."</li>
      <li>Harga Properti : ". parent::getHargaProperti()."</li>
      <li>Stok Properti : ". parent::cetakStokKayu()."</li>
      <li>Jumlah Properti : ". $this->getJumlahProperti()."</li>
    </ul>"; 
  }
}