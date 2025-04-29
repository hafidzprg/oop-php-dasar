<?php

define("__SAYUR__","Bayam");
class Sayuran {
  private static $namaSayur;
  private static $jenisSayur;
  private static $manfaatSayur;

  public static function getNama() {
    return self::$namaSayur;
  }
  public static function setNama($nama) {
    return self::$namaSayur = $nama;
  }

  public static function getJenis() {
    return self::$jenisSayur;
  }
  public static function setJenis($jenis) {
    return self::$jenisSayur = $jenis;
  }

  public static function getManfaat() {
    return self::$manfaatSayur;
  }
  public static function setManfaat($manfaat) {
    return self::$manfaatSayur = $manfaat;
  }

  public static function cetakInfoSayur() {
    return "Nama sayur ini adalah ". self::getNama(). " sayur ini memiliki jenis ". self::getJenis(). " dan manfaat sayur ini adalah ". self::getManfaat(). " dan inilah ".  __SAYUR__;
  }

  public static function validasi() {
    return self::cetakInfoSayur() == true ? var_dump("<script>alert('Ok berhasil')</script>") : var_dump("<script>alert('Yah gagal')</script>");
  }
}

class Kendaraan {
  public const MOBIL = "Avanza";

  public static function getMobil() {
    return self::MOBIL;
  }

  private static function cekGetMobil() {
    return __FUNCTION__;
  }

  public static function validasiGetMobil() {
    return self::cekGetMobil() == true ? var_dump("<script>alert('validasi cek get mobil berhasil')</script>") : var_dump("<script>alert('yahh cek validasi mobil gagal')</script>");
  }
  private static function validasiMobil() {
    // if(self::MOBIL == "") {
    //   echo"<script>alert('Validasi mobil gagal')</script>";
    // }
    // else {
    //   return"<script>alert('Validasi mobil berhasil')</script>";
    // }

    echo self::MOBIL == false ? var_dump("<script>alert('Yah gagal')</script>") : var_dump("<script>alert('anda berhak menyandang gelar sebagai fullstack developer')</script>");
  }

  public static function hasilValidasi() {
    return self::validasiMobil();
  }
}