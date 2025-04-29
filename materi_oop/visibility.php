<?php
class Game {
  public $namaGame;
  public $genreGame;
  public $stokGame;

  public function __construct($namaGame, $genreGame, $stokGame) {
    $this->namaGame = $namaGame;
    $this->genreGame = $genreGame;
    $this->stokGame = $stokGame;
  }
}

class DataGame {
  public function infoGame($data) {
    return "
    <ul>
      <li>Nama Game : $data->namaGame</li>
      <li>Genre Game : $data->genreGame</li>
      <li>Stok Game : $data->stokGame</li>
    </ul>";
  }
}

class InheritGame {
  public function infoGame($data) {
    return "
    <ul>
      <li>Nama Game Nih Boss : $data->namaGame</li>
      <li>Genre Games : $data->genreGame</li>
      <li>Stok Games : $data->stokGame</li>
    </ul>";
  }
}

class Overriding extends Game{
  public $hargaGame;
  public $promoGame;
  public function __construct($namaGame, $genreGame, $stokGame, $hargaGame, $promoGame) {
    parent::__construct($namaGame, $genreGame, $stokGame);
    $this->hargaGame = $hargaGame;
    $this->promoGame = $promoGame;
  }

  public function InfoPromo() {
    return $this->hargaGame - ($this->hargaGame * $this->promoGame / 100);
  }

  public function InfoGame() {
    return "
    <ul>
      <li>Nama Game Nih Boss : $this->namaGame</li>
      <li>Genre Games : $this->genreGame</li>
      <li>Stok Games : $this->stokGame</li>
      <li>Harga Games : $this->hargaGame</li>
    </ul>";
  }
}




// contoh kasus visibility start

// contoh kasus visibility end