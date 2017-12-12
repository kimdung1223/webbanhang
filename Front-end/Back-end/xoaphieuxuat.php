<?php
include "config.php";
include "autoload.php";
$obj = new phieuxuat();
$ma = $_GET["mapx"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themphieuxuat.php");