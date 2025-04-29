<?php

abstract class Car {
  public static $namaMobil;

  abstract static public function print();
}

class Lamborghini extends Car {
   public static function print() {
    return"Nama Mobil Ini adalah ". self::$namaMobil;
   }
}

class Audi extends Car {
  public static function print() {
    return "Nama Mobil ini adalah ". self::$namaMobil;
  }
}