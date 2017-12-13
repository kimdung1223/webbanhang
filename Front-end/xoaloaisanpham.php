<?php
include "config.php";
include "autoload.php";
$obj = new loaisanpham();
$ma = $_GET["maloai"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themloaisanpham.php");