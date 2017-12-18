<?php
include "config.php";
include "autoload.php";
$obj = new khachhang();
$ma = $_GET["makhachhang"];
$a=$obj->getbyOnePH($ma);
$b=$obj->getbyOneBLSP($ma);
if($a!=Array()||$b!=Array())
{
	echo "Không được xoá!!!<br/>";
	echo " Có ".count($a) ."&nbsp;phản hồi<br/>";
	echo " Có ".count($a)."&nbsp;bình luận sản phẩm";
}
else
{
	$data = $obj->delete($ma);
	header("location:themkhachhang.php");
}