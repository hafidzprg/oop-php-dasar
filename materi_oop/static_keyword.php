<?php
class Contoh {
  public static $angka = 1;

  public function cetak() {
    return self::$angka++;
  }
}