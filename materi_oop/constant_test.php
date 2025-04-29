<?php
include("constant.php");

echo Testing::getPrint();

Testing2::getPrint();
var_dump(Testing2::getTest());

echo"<hr/>";

Testing3::$nama = "Hafidz Usman";
Testing3::$umur = 23;

echo Testing3::getCetak();
