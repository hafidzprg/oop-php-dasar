<?php
class Olahraga {
  public $namaOlahraga;
  public $jenisOlahraga;
  public $tokohOlahraga;
  public $durasiOlahraga;

  public function __construct($namaOlahraga, $jenisOlahraga, $tokohOlahraga, $durasiOlahraga) {
    $this->namaOlahraga = $namaOlahraga;
    $this->jenisOlahraga = $jenisOlahraga; 
    $this->tokohOlahraga = $tokohOlahraga;
    $this->durasiOlahraga = $durasiOlahraga;
  }
}

class printInfoOlahraga {
  public function printInfo(Olahraga $info) {
    return"
    <ul>
      <li>Nama Olahraga : $info->namaOlahraga</li>
      <li>Jenis Olahraga : $info->jenisOlahraga</li>
      <li>Tokoh Olahraga : $info->tokohOlahraga</li>
      <li>Durasi Olahraga : $info->durasiOlahraga</li>
    </ul>";
  }
}

class InheritanceOlahraga extends Olahraga {
  public $gelar;

  public function __construct($gelar) {
    $this->gelar = $gelar;
  }
  public function dataMma($data) {
    return"
    <ul>
      <li>Nama Olahraga : $data->namaOlahraga</li>
      <li>Jenis Olahraga : $data->jenisOlahraga</li>
      <li>Nama Petarung : $data->tokohOlahraga</li>
      <li>Durasi Latihan : $data->durasiOlahraga</li>
      <li>Gelar : $this->gelar</li>

    </ul>";
  }
  public function dataBiliar($data) {
    return"
    <ul>
      <li>Nama Olahraga : $data->namaOlahraga</li>
      <li>Tipe Olahraga : $data->jenisOlahraga</li>
      <li>Nama Pemain : $data->tokohOlahraga</li>
      <li>Durasi Permainan : $data->durasiOlahraga</li>
      <li>Gelar : $this->gelar</li>

    </ul>";
  }
}