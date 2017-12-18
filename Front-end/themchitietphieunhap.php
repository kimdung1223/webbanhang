<?php
include "config.php";
include "autoload.php";
$obj = new chitietphieunhap();
$o2 = new sanpham();
$o3=new phieunhap();
//print_r($_POST);
if (isset($_POST['sm']))
{
	
	$ma=$_POST['mapn'];
	//print_r($_POST['madh']);
	$masp=$_POST['masp'];
	$sl=$_POST['sl'];
	$dg=$_POST['dg'];
	
	$data = $obj->insert($ma,$masp,$sl,$dg,null);
}
$data = $obj->getAll();
$a  = $o2->getAll();
$b=$o3->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chi tiết phiếu nhập</title>
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
<legend>Nhập thông tin chi tiết phiếu nhập</legend>
<form action="themchitietphieunhap.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã phiếu nhập :</td>
        <td><select name="mapn" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["mapn"]; ?>"><?php echo $v["mapn"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
    <tr>
    	<td>Mã sản phẩm :</td>
        <td><select name="masp" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["masp"]; ?>"><?php echo $v["masp"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
     <tr>
    	<td>Số lượng :</td>
        <td><input type="number" name="sl" placeholder="Phải nhập số!" /></td>
    </tr>
     <tr>
    	<td>Đơn giá :</td>
        <td><input type="number" name="dg" placeholder="Phải nhập số!" /></td>
    </tr>
     <tr>
    	<td>Thành tiền :</td>
        <td><input type="text" name="tt" disabled/></td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" value="Thêm" name="sm"/>
        </td>
        
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã phiếu nhập </th>
    <th> Mã sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["mapn"]; ?></td>
        <td><?php echo $r["masp"]; ?></td>
        <td><?php echo $r["soluong"]; ?></td>
        <td><?php echo $r["dongia"]; ?></td>
        <td><?php echo $r["thanhtien"]; ?></td>
        <td>
        <a href="xoachitietphieunhap.php?mapn=<?php echo $r["mapn"]; ?>">Xóa</a>&nbsp;
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>