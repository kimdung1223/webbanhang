<?php
include "config.php";
include "autoload.php";
$obj = new donhang();
$ma = $_GET["madh"];
//echo count($data); đếm
$a=$obj->getbyOnePX($ma);
if($a!=Array())
{
	echo "Không được xoá!!!<br/>";
	echo " Có ".count($a) ."&nbsp;phiếu xuất";}
else
{
	$data = $obj->delete($ma);
	header("location:themdonhang.php");
}