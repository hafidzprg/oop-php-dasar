<?php
// class pemain bola start
class Player {
  public $namaPemain;
  public $tipePemain;
  public $kebangsaan;
  public $tinggiPemain;
  public $gaji;

  public function __construct($namaPemain, $tipePemain, $kebangsaan, $tinggiPemain, $gaji) {
    $this->namaPemain = $namaPemain;
    $this->tipePemain = $tipePemain;
    $this->kebangsaan = $kebangsaan;
    $this->tinggiPemain = $tinggiPemain;
    $this->gaji = $gaji;
  }
}
// class pemain bola end



// class cetak info pemain start
class cetakInfoPemain {
  public function cetakInfoPlayer(Player $playerData) {
    return"
    <ul>
      <li>Nama Pemain : $playerData->namaPemain</li>
      <li>Posisi Pemain : $playerData->tipePemain</li>
      <li>Kebangsaan : $playerData->kebangsaan</li>
      <li>Tinggi Pemain : $playerData->tinggiPemain</li>
      <li>Gaji Pemain : $playerData->gaji</li>
    </ul>";
  }
}
// class cetak info pemain end

class infoDetailPemain extends Player {
  public function dataLengkapPemain($dataLengkap) {
    return "<ul>
      <li>Nama Pemain : $dataLengkap->namaPemain</li>
      <li>Tipe Pembalap : $dataLengkap->tipePemain</li>
      <li>Kebangsaan : $dataLengkap->kebangsaan</li>
      <li>Tinggi Pemain : $dataLengkap->tinggiPemain</li>
      <li>Gaji Dolar : $dataLengkap->gaji</li>
    </ul>";
  }

  public function dataLengkapPemain2($dataLengkap) {
    return "<ul>
      <li>Nama Pemain : $dataLengkap->namaPemain</li>
      <li>Tipe Pebulu Tangkis : $dataLengkap->tipePemain</li>
      <li>Kebangsaan : $dataLengkap->kebangsaan</li>
      <li>Tinggi Pemain : $dataLengkap->tinggiPemain</li>
      <li>Gaji Rupiah : $dataLengkap->gaji</li>
    </ul>";
  }
}



// class pelatih start
// class coachPelatih {
//     public $namaPelatih;
//     public $lamaMelatih;
//     public $kebangsaan;

//     public function __construct($namaPelatih, $lamaMelatih, $kebangsaan) {
//       $this->namaPelatih = $namaPelatih;
//       $this->lamaMelatih = $lamaMelatih;
//       $this->kebangsaan = $kebangsaan;
//     }
// }
// class pelatih end




// cetak info pelatih start
// class cetakInfoPelatih {
//   public function cetakInfoCoach(coachPelatih $coachData) {
//     return"
//     <ul>
//       <li>Nama Pemain : $coachData->namaPelatih</li>
//       <li>Posisi Pemain : $coachData->lamaMelatih</li>
//       <li>Kebangsaan : $coachData->kebangsaan</li>
//     </ul>";
//   }
// }
// cetak info pelatih end