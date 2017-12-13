<?php
include "config.php";
include "autoload.php";
$obj = new chitietkhuyenmai();
$ma = $_GET["makm"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themchitietkhuyenmai.php");