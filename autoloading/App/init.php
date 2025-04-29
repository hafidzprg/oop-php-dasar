<?php
// include("Bangunan/Properti.php");
// include("Bangunan/Kayu.php");
// include("Bangunan/Material.php");
// include("Bangunan/Finishing.php");

spl_autoload_register(function ($class) {
 include("Bangunan/". $class .".php");
});