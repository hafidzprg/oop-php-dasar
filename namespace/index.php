<?php
include("App/init.php");
// array untuk objek kayu
$properti1 = [
  new Kayu("Kayu", "Benda Keras", "Rp.100.000.000", "Ada"),
  new Kayu("Besi", "Benda Keras", "Rp.100.000.000", "Ada"),
];

$properti2 = [
  new material("Pasir", "Benda Padat", "Rp.250.000", "Ada", "1 Ret"),
  new material("Kerikil", "Benda Padat", "Rp.350.000", "Ada", "2 Ret"),
 
];

$properti3 = [
  new Finishing("MetroLite", "Cat Tembok", "Rp.1.500.000", "Ada", "1 Ember Besar"),
];

$obj = new Material("PAsir", "Benda", "1211212", "ada", "1 ret");
echo$obj->cetakInfoMaterial();


//array untuk objek kayu

$properti = new Properti("Kayu", "Bahan Ringan", "Rp.200.000");
$kayu1 = new Kayu("Kayu Linggua", "Bahan Bangunan", "Rp.5.000.000", "Kosong");

// $properti1 = 

echo"<h3 style='margin-left: 5rem;'>Data Properti Parents</h3>";
echo$properti->cetakProperti();
echo"<hr/>";
echo"<h3 style='margin-left: 5rem;'>Data Properti Kayu Inheritance</h3>";
echo$kayu1->cetakProperti();
echo"<hr/>";

use App\Bangunan\User as UserBangunan;
use App\Service\User as UserServices;

new UserServices();
echo"<br>";
new UserBangunan();
echo"<hr>";




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Properti</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Data Properti Protected And Private</h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Properti</th>
                  <th>Jenis Properti</th>
                  <th>Harga Properti</th>
                  <th>Stok Properti</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                 foreach ($properti1 as $kayu) {
                    echo "<tr>
                        <td>$i</td>
                        <td>{$kayu->getNamaProperti()}</td>
                        <td>{$kayu->getJenisProperti()}</td>
                        <td>{$kayu->cetakHargaKayu()}</td>
                        <td>{$kayu->cetakStokKayu()}</td>
                        <td>
                            <a href='#' class='btn btn-sm btn-success mb-2'>Simpan</a>
                            <a href='#' class='btn btn-sm btn-danger mb-2'>Lelang</a>
                        </td>
                    </tr>";
                    $i++;
                  }
                ?>
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Properti</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Data Properti Protected And Private</h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Properti</th>
                  <th>Jenis Properti</th>
                  <th>Harga Properti</th>
                  <th>Stok Properti</th>
                  <th>Jumlah Properti</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                 foreach ($properti2 as $material) {
                    echo "<tr>
                        <td>$i</td>
                        <td>{$material->getNamaProperti()}</td>
                        <td>{$material->getJenisProperti()}</td>
                        <td>{$material->getHargaProperti()}</td>
                        <td>{$material->cetakInfoStokKayu()}</td>
                        <td>{$material->getRet()}</td>
                        <td>
                            <a href='#' class='btn btn-sm btn-success mb-2'>Simpan</a>
                            <a href='#' class='btn btn-sm btn-danger mb-2'>Lelang</a>
                        </td>
                    </tr>";
                    $i++;
                  }
                ?>
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Properti</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Data Finishing Bangunan</h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Properti</th>
                  <th>Jenis Properti</th>
                  <th>Harga Properti</th>
                  <th>Stok Properti</th>
                  <th>jumlah Properti</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                 foreach ($properti3 as $finish) {
                    echo "<tr>
                        <td>$i</td>
                        <td>{$finish->getNamaProperti()}</td>
                        <td>{$finish->getJenisProperti()}</td>
                        <td>{$finish->cetakInfoHargaKayu()}</td>
                        <td>{$finish->cetakStokKayu()}</td>
                        <td>{$finish->getJumlahProperti()}</td>
                        <td>
                            <a href='#' class='btn btn-sm btn-success mb-2'>Simpan</a>
                            <a href='#' class='btn btn-sm btn-danger mb-2'>Lelang</a>
                        </td>
                    </tr>";
                    $i++;
                  }
                ?>
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>



