<?php
include "config.php";
include "autoload.php";
$obj = new khachhang();
$ma = $_GET["makhachhang"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themkhachhang.php");