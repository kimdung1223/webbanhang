<?php
include "config.php";
include "autoload.php";
$obj = new donhang();
$ma = $_GET["madh"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themdonhang.php");