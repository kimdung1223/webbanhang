<?php
include "config.php";
include "autoload.php";
$obj = new sanpham();
$ma = $_GET["masp"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themsanpham.php");