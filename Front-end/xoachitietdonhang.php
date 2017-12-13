<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" <?php
include "config.php";
include "autoload.php";
$obj = new chitietdonhang();
$ma = $_GET["madh"];// trong ngoặc tên đặt trong link a
$data = $obj->delete($ma);
header("location:themchitietdonhang.php");