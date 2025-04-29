<?php
class Properti {
  public $namaProperti;
  public $jenisProperti;
  protected $hargaProperti;

  public function __construct($namaProperti, $jenisProperti, $hargaProperti) {
    $this->namaProperti = $namaProperti;
    $this->jenisProperti = $jenisProperti;
    $this->hargaProperti = $hargaProperti;
  }

  public function cetakProperti() {
    return "<ul>
      <li>Nama Properti : $this->namaProperti</li>
      <li>Jenis Properti : $this->jenisProperti</li>
      <li>Harga Properti : $this->hargaProperti</li>
    </ul>";
  }
}

class Kayu extends Properti {
  private $stokProperti;

  

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti);
    $this->stokProperti = $stokProperti;
  }
  public function cetakInfoHargaKayu() {
    return $this->hargaProperti;
  }

  protected function cetakInfoStokKayu() {
    return $this->stokProperti;
  }

  public function cetakProperti() {
    return "<ul>
      <li>Nama Properti : $this->namaProperti</li>
      <li>Jenis Properti : $this->jenisProperti</li>
      <li>Harga Properti : $this->hargaProperti</li>
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

class Material extends Kayu {
  protected $ret;

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti, $ret) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti);
    $this->ret = $ret;
  }

  public function cetakInfoMaterial() {
    return "<ul>
      <li>Nama Properti : $this->namaProperti</li>
      <li>Jenis Properti : $this->jenisProperti</li>
      <li>Harga Properti : $this->hargaProperti</li>
      <li>Jumlah Properti : $this->ret</li>
    </ul>";
  }

  private function cetakJumlahMaterial() {
    return $this->ret;
  }

  public function CetakMaterial() {
    return $this->cetakJumlahMaterial();
  }
}