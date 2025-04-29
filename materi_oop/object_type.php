<?php
// class karyawan start
class Karyawan {
  public $nama;
  public $umur;
  public $totalGaji;

  function __construct($nama, $umur, $totalGaji) {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->totalGaji = $totalGaji;
  }

  public function print() {
    return "<h3 style='margin-left: 5rem;'>List Karyawan</h3>
    <ul>
      <li>Nama Karyawan : $this->nama</li>
      <li>Umur Karyawan : $this->umur</li>
      <li>Total Gaji : $this->totalGaji</li>
    </ul>";
  }
}

// class karyawan end


// class siswa start
class Siswa {
  public $nama;
  public $umur;
  public $alamat;

  public function __construct($nama, $umur, $alamat) {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->alamat = $alamat;
  }

  public function print() {
    return "<h3 style='margin-left: 5rem;'>List Siswa</h3>
    <ul>
      <li>Nama Karyawan : $this->nama</li>
      <li>Umur Karyawan : $this->umur</li>
      <li>Total Gaji : $this->alamat</li>
    </ul>"; 
  }
}
// class siswa end


// class data karyawan start
class CetakDataKaryawan {
  public function print2(Karyawan $data) {
      return $data->print();
  }
}
// class data karyawan end


// class data karyawan start
class CetakDataSiswa {
  public function print3(Siswa $data) {
      return $data->print();
  }
}
// class data karyawan end
?>