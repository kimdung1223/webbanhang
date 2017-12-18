<?php

include "config.php";
include "autoload.php";
$obj = new loaisanpham();
if (isset($_POST['Submit']))
{
	$maloai = $_POST['maloai'];
	$ten = $_POST['tenloai'];
	if($maloai=="")
	{
		echo "Vui lòng nhập mã loại!";
	}
	else if($ten=="")
	{
		echo "Vui lòng nhập tên loại!";	
	}
	else
	{
		$data = $obj->insert($maloai,$ten);
	}
}
	$data = $obj->getAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loại sản phẩm</title>
<link rel="stylesheet" href="css/form.css"/>
<link rel="stylesheet" href="css/main_ad.css"/>
</head>

<body>
<div id="container">
    	<div id="header">
        	<div id="top">
            	<b> Xin chào admin</b>&nbsp;&nbsp;
                <img src="hinh/logout.png" width="17px" height="14px"/>&nbsp;<a href="dangxuat.php">Đăng xuất</a>
            </div>
            <div style="clear:both"></div>
        	<div id="banner"></div>
        </div>
        <div id="menu">
        	<ul>
            	<li><a href="themloaisanpham.php">Loại sản phẩm</a></li> 
                <li><a href="themsanpham.php">Sản phẩm</a></li>
                <li><a href="themnhanvien.php">Nhân viên</a></li>
                <li><a href="themkhachhang.php">Khách hàng</a></li>
                <li><a href="themdonhang.php">Đơn hàng</a></li>
                <li><a href=""#">Phiếu nhập / xuất</a>
                	<ul class="sub">
                    	<li><a href="themphieunhap.php">Phiếu nhập</a></li>
                        <li><a href="themphieuxuat.php">Phiếu xuất</a></li>
                    </ul>
                </li>
                <li><a href="themkhuyenmai.php">Khuyến mãi</a></li>
                <li><a href="themtintuc.php">Tin tức</a></li>
                <li><a href="themphanhoi.php">Phản hồi</a></li>
                <li><a href="thembinhluansp.php">Bình luận</a>
                </li>
        	</ul>
        </div>
        <div id="main">
        	<div id="main_top">
            	
            </div>
            <div id="main_bottom">
            
            </div>
        </div>
    </div>
<fieldset>
<legend>Nhập thông tin loại sản phẩm</legend>
<form action="themloaisanpham.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã loại :</td>
        <td><input type="text" name="maloai"></td>
    </tr>
    <tr>
    	<td>Tên loại:</td>
        
        <td><input type="text" name="tenloai" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit">&nbsp;
        </td>
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã loại</th>
    <th> Tên loại</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["maloaisp"]; ?></td><!-- tên bảng-->
        <td><?php echo $r["tenloaisp"];
		$obj = new loaisanpham();
		//$ma = $_GET["maloai"];
		$a=$obj->getbyOne( $r["maloaisp"]);
		//print_r($a);
		echo "&nbsp;(".count($a)."&nbsp;sản phẩm)";
		/*if($a!=Array())
		{
			echo "(".count($a) .")";
		}*/ ?></td>
        <td>
        <a href="xoaloaisanpham.php?maloai=<?php echo $r["maloaisp"]; ?>">Xóa</a> &nbsp;
        <a href="sualoaisanpham.php?maloai=<?php echo $r["maloaisp"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>