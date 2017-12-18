<?php

include "config.php";
include "autoload.php";
$obj = new khuyenmai();
if (isset($_POST['Submit']))
{
	$ma = $_POST['makm'];
	$ten = $_POST['tenkm'];
	$ngaybd=$_POST['ngaybd'];
	$ngaykt=$_POST['ngaykt'];
	if($ma=="")
	{
		echo"Phải nhập mã!";
	}
	else if($ten=="")
	{
		echo "Phải nhập tên!";
	}
	else if(strtotime($ngaybd) > strtotime($ngaykt) )
	{
		echo "Ngày kết thúc phải sau ngày bắt đầu!";
	}
	else
	{
		$data = $obj->insert($ma,$ten,$ngaybd,$ngaykt);
	}
}
	$data = $obj->getAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khuyến mãi</title>
<link rel="stylesheet" href="css/form.css"/>
<link rel="stylesheet" href="css/main_ad.css"/>
</head>

<body>
<div id="container">
    	<div id="header">
        	<div id="top">
            	<b> Xin chào admin</b>&nbsp;&nbsp;
                <img src="hinh/login.PNG"/>&nbsp;<a href="dangxuat.php">Đăng xuất</a>
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
<legend>Nhập thông tin khuyến mãi</legend>
<form action="themkhuyenmai.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã khuyến mãi :</td>
        <td><input type="text" name="makm"></td>
    </tr>
    <tr>
    	<td>Tên khuyến mãi:</td>
        <td><input type="text" name="tenkm" /></td>
    </tr>
    <tr>
    	<td>Ngày bắt đầu:</td>
        <td><input type="date" name="ngaybd" /></td>
    </tr>
    <tr>
    	<td>Ngày kết thúc:</td>
        <td><input type="date" name="ngaykt" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit">&nbsp;
        <a href="themchitietkhuyenmai.php"><input type="button" name="ctkm" value="Chi tiết khuyến mãi"/></a>
        </td>
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã khuyến mãi</th>
    <th> Tên khuyến mãi</th>
    <th>Ngày bắt đầu</th>
    <th>Ngày kết thúc</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["makm"]; ?></td><!-- tên bảng-->
        <td><?php echo $r["tenkm"]; ?></td>
        <td><?php echo $r["ngaybd"]; ?></td>
        <td><?php echo $r["ngaykt"]; ?></td>
        <td>
        <a href="xoakhuyenmai.php?makm=<?php echo $r["makm"]; ?>">Xóa</a> &nbsp;
        <a href="suakhuyenmai.php?makm=<?php echo $r["makm"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>