<?php
include("abstract2.php");
// array untuk objek kayu
$properti1 = [
  new Kayu("Kayu", "Benda Keras", "Rp.100.000.000", "Ada"),
  new Kayu("Besi", "Benda Keras", "Rp.100.000.000", "Ada"),
];

// $properti1 == true ? print("<script>alert('Berhasil')</script>") : print("<script>alert('Gagal')</script>");

// if($properti1 == true) {
//   print("<script>alert('Berhasil')</script>");
// }
// else {
//   print("<script>alert('Gagal')</script>");
// }

$properti2 = [
  new Material("Pasir", "Bahan Campuran", "Rp.500.000", "2 Ret", "Ada"),
  new Material("Semen", "Bahan Campuran", "Rp.75.000", "1 Sak", "Ada"),
];

$properti3 = [
  new Finishing("MetroLite", "Cat Tembok", "Rp.1.500.000", "Ada", "1 Ember Besar"),
  new Finishing("Avitex", "Cat Tembok", "Rp.1.000.000", "Ada", "1 Ember Besar"),
];

$properti4 = [
  new LantaiDasar("Tehel Granit", "Bahan untuk Lantai", "Rp.2.000.000 per kubik", "Ada", "5 Kubik"),
];


// array untuk objek kayu

// $properti = new Properti("Kayu", "Bahan Ringan", "Rp.200.000");
$kayu1 = new Kayu("Kayu Linggua", "Bahan Bangunan", "Rp.5.000.000", "Kosong");

// $properti1 = 

// echo"<h3 style='margin-left: 5rem;'>Data Properti Parents</h3>";
// echo$properti->cetakProperti();
echo"<hr/>";
echo"<h3 style='margin-left: 5rem;'>Data Properti Kayu Inheritance</h3>";
echo$kayu1->cetakProperti();
echo"<hr/>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Properti</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
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

  <script src="js/bootstrap.bundle.min.js"></script>
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
            <h3 class="text-center">Data Material Cor</h3>
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
                 foreach ($properti2 as $bahan) {
                    echo "<tr>
                        <td>$i</td>
                        <td>{$bahan->getNamaProperti()}</td>
                        <td>{$bahan->getJenisProperti()}</td>
                        <td>{$bahan->cetakInfoHargaKayu()}</td>
                        <td>{$bahan->cetakMaterial()}</td>
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
            <h3 class="text-center">Data Lantai Bangunan</h3>
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
                 foreach ($properti4 as $tehel) {
                    echo "<tr>
                        <td>$i</td>
                        <td>{$tehel->getNamaProperti()}</td>
                        <td>{$tehel->getJenisProperti()}</td>
                        <td>{$tehel->cetakInfoHargaKayu()}</td>
                        <td>{$tehel->cetakStokKayu()}</td>
                        <td>{$tehel->getJumlahTehel()}</td>
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