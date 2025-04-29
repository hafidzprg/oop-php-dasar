<?php
abstract class Properti {
  private $namaProperti;
  private $jenisProperti;
  private $hargaProperti;

  public function __construct($namaProperti, $jenisProperti, $hargaProperti) {
    $this->namaProperti = $namaProperti;
    $this->jenisProperti = $jenisProperti;
    $this->hargaProperti = $hargaProperti;
  }

  abstract public function cetakProperti();

  public function setNamaProperti($nama){
    $this->namaProperti = $nama;
  }

  public function getNamaProperti() {
    return $this->namaProperti;
  }
  public function getJenisProperti() {
    return $this->jenisProperti;
  }
  public function setJenisProperti($jenis) {
    $this->jenisProperti = $jenis;
  }

  public function getHargaProperti() {
    return $this->hargaProperti;
  }

  public function setHargaProperti($harga) {
    $this->hargaProperti = $harga;
  }
}



class Kayu extends Properti {
  private $stokProperti;

  

  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti);
    $this->stokProperti = $stokProperti;
  }
  public function cetakInfoHargaKayu() {
    return $this->getHargaProperti();
  }

  protected function cetakInfoStokKayu() {
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

class LantaiDasar extends Kayu {

  private $jmlTehel;
  public function __construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti, $jmlTehel) {
    parent::__construct($namaProperti, $jenisProperti, $hargaProperti, $stokProperti);
    $this->jmlTehel = $jmlTehel;
  }

  public function getJumlahTehel() {
    return $this->jmlTehel;
  }
}