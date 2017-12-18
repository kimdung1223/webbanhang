<?php
include "config.php";
include "autoload.php";
$obj = new phieunhap();
$o2 = new nhanvien();
//print_r($_POST);
if (isset($_POST['Submit']))
{
	$mapn=$_POST['mapn'];
	$manv=$_POST['manv'];
	$ngay=$_POST['ngay'];
	//$tien=$_POST['tongtien'];
	if($mapn=="")
	{
		echo "Vui lòng nhập mã phiếu nhập!";
	}
	else
	{
		$data = $obj->insert($mapn,$manv,$ngay,0);
	}
}
$data = $obj->getAll();
$a= $o2->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phiếu nhập</title>
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
<legend>Nhập thông tin phiếu nhập</legend>
<form action="themphieunhap.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã phiếu nhập :</td>
        <td><input type="text" name="mapn"></td>
    </tr>
    <tr>
    	<td>Mã nhân viên :</td>
        <td><select name="manv" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["manv"]; ?>"><?php echo $v["manv"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
     <tr>
    	<td>Ngày nhập :</td>
        <td><input type="date" name="ngay" /></td>
    </tr>
     <tr>
    	<td>Tổng tiền :</td>
        <td><input type="text" name="tongtien" disabled /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit">&nbsp;&nbsp;<a href="themchitietphieunhap.php"><input type="button" name="ctpn" value="Chi tiết phiếu nhập"/></a></td>
        
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã phiếu nhập </th>
    <th> Mã nhân viên</th>
    <th> Ngày nhập</th>
    <th>Tổng tiền</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
          <td> <?php echo $r["mapn"]; ?></td>
        <td><?php echo $r["manv"]; ?></td>
        <td><?php echo $r["ngaynhap"]; ?></td>
        <td><?php echo $r["tongtien"]; ?></td>
        <td>
          <a href="xoaphieunhap.php?mapn=<?php echo $r["mapn"]; ?>">Xóa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>