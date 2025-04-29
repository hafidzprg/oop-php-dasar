<?php
// namespace Html;
class Properti {
  private $namaProperti;
  private $jenisProperti;
  private $hargaProperti;

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