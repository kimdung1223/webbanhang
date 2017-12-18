<?php
include "config.php";
include "autoload.php";
$obj = new sanpham();
$ma = $_GET["masp"];
$a=$obj->getbyOneCTDH($ma);
$b=$obj->getbyOneCTPN($ma);
$c=$obj->getbyOneCTPX($ma);
$d=$obj->getbyOneBLSP($ma);
if($a!=Array()||$b!=Array()||$c!=Array()||$d!=Array())
{
	echo "Không được xoá!!!<br/>";
	echo " Có ".count($a) ."&nbsp;đơn hàng được lập<br> ";
	echo " Có ".count($b) ."&nbsp;phiếu nhập được lập <br>";
	echo " Có ".count($c) ."&nbsp;phiếu xuất được lập<br> ";
	echo " Có ".count($d)."&nbsp;được bình luận";
}
else
{
	$data = $obj->delete($ma);
	header("location:themsanpham.php");
}