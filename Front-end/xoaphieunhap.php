<?php
include "config.php";
include "autoload.php";
$obj = new phieunhap();
$ma = $_GET["mapn"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themphieunhap.php");