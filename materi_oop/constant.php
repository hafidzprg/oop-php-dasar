<?php
define("__CONTOH__", "Hai dunia");
define("__PRODI__", "Teknik Informatika");

class Testing {
  private static function print() {
   return __CONTOH__ == "Hai dunia" ? var_dump("<script>alert('ok')</script>") : "null";
  }

  public static function getPrint() {
    return self::print();
  }
}

var_dump(__DIR__);
// die();




class Testing2 {

  private static function test() {
    return __FUNCTION__;
  }
  private static function print() {
    if(__PRODI__ == "") {
      echo"<script>alert('salah wooy')</script>";
    }
    else {
      echo "<script>alert('aah ini baru anda')</script>";
    }
    return __PRODI__;
  }

  public static function getPrint() {
    return self::print() == true ? var_dump("<script>alert('Untuk class Testing2 saat ini anda berada di static function getTest')</script>") : "null";
  }

  public static function getTest() {
    return self::test();
  }
}


class Testing3 {
  public static $nama;
  public static $umur;
  public const ALAMAT = "Wayame";

  public function __construct($nama, $umur) {
    $this->nama = $nama;
    $this->umur = $umur;
  }

  private static function cetak() {
    return "Nama Saya ".self::$nama." Umur Saya ".self::$umur." Dan Alamat Saya Di ".self::ALAMAT ;
  }

  public static function getCetak() {
    return self::cetak();
  }
}

