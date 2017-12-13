<?php
include "config.php";
include "autoload.php";
$obj = new chitietphieunhap();
$ma = $_GET["mapn"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themchitietphieunhap.php");