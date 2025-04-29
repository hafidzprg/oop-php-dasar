<?php
include("interfaces.php");
$animals = [
  new Sapi(),
  new Ayam(),
  new Singa(),
];

$jenis = [
  "Karnivora",
  "Herbivora",
  "Omnivora",
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suara Hewan</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="margin-top: 10rem;">
    <div class="row justify-content-center">
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header text-white" style="background-color: orange;">
            <h3 class="text-center">Suara Hewan</h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Hewan</th>
                  <th>Suara</th>
                  <th>Jenis Hewan</th>
                  <th>Penggembala</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach($animals as $animal) {
                  echo"
                  <tr>
                     <td>$i</td>
                     <td>{$animal->nama()}</td>
                     <td>{$animal->print()}</td>
                     <td>{$animal->jenis()}</td> 
                     <td>{$animal->namaPenggembala()}</td> 
                     <td>
                        <a href='#' class='btn btn-sm mb-2' style='background: orange;'>Ubah</a>
                        <a href='#' class='btn btn-sm btn-danger mb-2'>Hapus</a>
                     </td>
                  </tr>
                  ";
                  $i++;
                }
                ?>
              </tbody>
            </table>
            <a href="#" class="btn btn-sm text-white d-grid" style="background-color: orange;">Tambah</a>
          </div>
        
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>