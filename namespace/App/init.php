<?php
// include("Bangunan/Properti.php");
// include("Bangunan/Kayu.php");
// include("Bangunan/Material.php");
// include("Bangunan/Finishing.php");


spl_autoload_register(function ($class) {
  $class  = explode("\\", $class);
  $class = end( $class );
  // $class  = end($class);
 include("Bangunan/". $class .".php");
});


spl_autoload_register(function ($class) {
  $class = explode("\\", $class);
  $class = end( $class );
  include("Service/". $class .".php");
});




