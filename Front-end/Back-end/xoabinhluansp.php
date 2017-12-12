<?php
include "config.php";
include "autoload.php";
$obj = new binhluansp();
$ma = $_GET["mabl"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:thembinhluansp.php");