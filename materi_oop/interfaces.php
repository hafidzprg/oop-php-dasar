<?php
interface Hewan {
  public function print();
}

interface NamaHewan {
  public function nama();
}

interface JenisHewan {
  public function jenis();
}

interface NamaPenggembala {
  public function namaPenggembala();
}

class Sapi implements Hewan, JenisHewan, NamaHewan, NamaPenggembala {
  public function print() {
    return "Mooooooooo";
  }
  public function jenis() {
    return "Herbivora";
  }
  public function nama() {
    return "Sapi";
  }
  public function namaPenggembala() {
    return "Agung";
  }
}
class Ayam implements Hewan, JenisHewan, NamaHewan, NamaPenggembala {
  public function print() {
    return "Kukuruyuuuu";
  }

  public function jenis() {
    return"Omnivora";
  }
  public function nama() {
    return"Ayam";
  }

  public function namaPenggembala() {
    return "Rino";
  }
}
class Singa implements Hewan, JenisHewan, NamaHewan, NamaPenggembala {
  public function print() {
    return "Rruuuuuaaaaarr";
  }

  public function jenis() {
    return"Karnivora";
  }
  public function nama() {
    return"Singa";
  }
  
  public function namaPenggembala() {
    return "Yanto";
  }
}