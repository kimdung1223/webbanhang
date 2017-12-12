<?php
include "config.php";
include "autoload.php";
$obj = new tintuc();
$ma = $_GET["matt"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themtintuc.php");