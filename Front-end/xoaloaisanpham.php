<?php
include "config.php";
include "autoload.php";
$obj = new loaisanpham();
$ma = $_GET["maloai"];
//echo count($data); đếm
$a=$obj->getbyOne($ma);
if($a!=Array())
{
	echo "Không được xoá!!!<br/>";
	echo " Có ".count($a) ."&nbsp;sản phẩm";
}
else
{
	$data = $obj->delete($ma);
	header("location:themloaisanpham.php");
}
