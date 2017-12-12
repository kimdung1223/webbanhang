<?php
include "config.php";
include "autoload.php";
$obj = new phanhoi();
$ma = $_GET["makh"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themphanhoi.php");