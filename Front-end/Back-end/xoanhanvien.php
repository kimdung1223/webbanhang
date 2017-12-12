<?php
include "config.php";
include "autoload.php";
$obj = new nhanvien();
$ma = $_GET["manv"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themnhanvien.php");