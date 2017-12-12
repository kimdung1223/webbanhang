<?php
include "config.php";
include "autoload.php";
$obj = new donhang();
$o2 = new nhanvien();
//print_r($_POST);
if (isset($_POST['Submit']))
{
	$ma=$_POST['madh'];
	$manv=$_POST['manv'];
	$ten=$_POST['hoten'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$ngay=$_POST['ngaylapdh'];
	/*$tien=$_POST['tongtien'];*/
	$trangthai=$_POST['tinhtrang'];
	$data = $obj->insert($ma,$manv,$ten,$dc,$dt,$ngay,NULL,$trangthai);
	
}
$data = $obj->getAll();
$a= $o2->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn hàng</title>
<link rel="stylesheet" href="css/form.css"/>
<link rel="stylesheet" href="css/main.css"/>
</head>

<body>
<div id="container">
    	<div id="header">
        	<div id="top">
            	<b> Xin chào admin</b>&nbsp;&nbsp;
                <img src="../hinh/logout.png" width="18px" height="14px" />&nbsp;<a href="dangxuat.php">Đăng xuất</a>
            </div>
            <div style="clear:both"></div>
        	<div id="banner"></div>
        </div>
        <div id="menu">
        	<ul>
            	<li><a href="themloaisanpham.php">Loại sản phẩm</a></li> 
                <li><a href="themsanpham.php">Sản phẩm</a></li>
                <li><a href="themhanvien.php">Nhân viên</a></li>
                <li><a href="themkhachhang.php">Khách hàng</a></li>
                <li><a href="themdonhang.php">Đơn hàng</a></li>
                <li><a href="#">Phiếu nhập / xuất</a>
                	<ul class="sub">
                    	<li><a href="themphieunhap.php">Phiếu nhập</a></li>
                        <li><a href="themphieuxuat.php">Phiếu xuất</a></li>
                    </ul>
                </li>
                <li><a href="themkhuyenmai.php">Khuyến mãi</a></li>
                <li><a href="themtintuc.php">Tin tức</a></li>
                <li><a href="themphanhoi.php">Phản hồi</a></li>
                <li><a href="thembinhluansp.php">Bình luận</a>  </li>
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
<legend>Nhập thông tin đơn hàng</legend>
<form action="themdonhang.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã đơn hàng :</td>
        <td><input type="text" name="madh"/></td>
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
    	<td>Họ tên người nhận :</td>
        <td><input type="text" name="hoten" /></td>
    </tr>
     <tr>
    	<td>Địa chỉ người nhận :</td>
        <td><input type="text" name="dc" /></td>
    </tr>
     <tr>
    	<td>Điện thoại người nhận :</td>
        <td><input type="text" name="dt" /></td>
    </tr>
     <tr>
    	<td>Ngày lập đơn hàng :</td>
        <td><input type="date" name="ngaylapdh" /></td>
    </tr>
     <tr>
    	<td>Tổng tiền :</td>
        <td><input type="text" name="tongtien" disabled/></td>

    </tr>
   <tr>
    	<td>Tình trạng đơn hàng :</td>
        <td><input type="text" name="tinhtrang" /></td>

    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" value="Thêm" name="Submit"/> &nbsp;
            <a href="themchitietdonhang.php"><input type="button" value=" Chi tiết đơn hàng" name="ctdh"/></
        </td>
        
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã đơn hàng </th>
    <th> Mã nhân viên</th>
    <th> Họ tên người nhận</th>
    <th>Địa chỉ người nhận</th>
    <th>Điện thoại người nhận</th>
    <th>Ngày lập đơn hàng</th>
    <th>Tổng tiền</th>
    <th>Tình trạng đơn hàng</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["madh"]; ?></td>
        <td><?php echo $r["manv"]; ?></td>
        <td><?php echo $r["hotennguoinhan"]; ?></td>
        <td><?php echo $r["diachinguoinhan"]; ?></td>
        <td><?php echo $r["dienthoainguoinhan"]; ?></td>
        <td><?php echo $r["ngaylapdh"]; ?></td>
        <td><?php echo $r["tongtien"]; ?></td>
        <td><?php echo $r["tinhtrangdh"]; ?></td>
        <td>
        <a href="xoadonhang.php?madh=<?php echo $r["madh"]; ?>">Xóa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>