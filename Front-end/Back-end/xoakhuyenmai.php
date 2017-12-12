<?php
include "config.php";
include "autoload.php";
$obj = new khuyenmai();
$ma = $_GET["makm"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themkhuyenmai.php");