<?php
include "config.php";
include "autoload.php";
$obj = new nhanvien();
$ma = $_GET["manv"];
$a=$obj->getbyOneDH($ma);
$b=$obj->getbyOnePN($ma);
$c=$obj->getbyOnePX($ma);
$d=$obj->getbyOneTT($ma);
$e=$obj->getbyOneBLSP($ma);
$f=$obj->getbyOnePH($ma);
if($a!=Array()||$b!=Array()||$c!=Array()||$d!=Array()||$e!=Array()||$f!=Array())
{
	echo "Không được xoá!!!<br/>";
	echo " Có ".count($a) ."&nbsp;đơn hàng<br/>";
	echo " Có ".count($b)."&nbsp; lập phiếu nhập<br/>";
	echo " Có ".count($c)."&nbsp;lập phiếu xuất<br/>";
	echo " Có ".count($d)."&nbsp;bài viết tin tức<br/>";
	echo " Có ".count($e)."&nbsp;trả lời bình luận sản phẩm<br/>";
	echo " Có ".count($f)."&nbsp;phản hồi<br/>";	
}
else
{
	$data = $obj->delete($ma);
	header("location:themnhanvien.php");
}

