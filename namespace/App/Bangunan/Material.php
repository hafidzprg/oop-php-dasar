<?php
class Material extends Kayu {
  private $ret;

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti, $ret) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti);
    $this->ret = $ret;
  }

  public function cetakInfoMaterial() {
    return "<ul>
      <li>Nama Properti :". $this->getNamaProperti()."</li>
      <li>Jenis Properti :". $this->getJenisProperti()."</li>
      <li>Harga Properti :". $this->getHargaProperti()."</li>
      <li>Stok Properti :". $this->cetakInfoStokKayu()."</li>
      <li>Jumlah Properti :". $this->getRet()."</li>
    </ul>";
  }

  private function cetakJumlahMaterial() {
    return $this->ret;
  }

  public function getRet() {
    return $this->ret;
  }

  public function CetakMaterial() {
    return $this->cetakJumlahMaterial();
  }
}