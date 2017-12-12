<?php
include "config.php";
include "autoload.php";
$obj = new nhanvien();
if (isset($_POST['Submit']))
{
	$ma = $_POST['manv'];
	$ten = $_POST['hoten'];
	$gt=$_POST['gt'];
	$ns=$_POST['ns'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$e=$_POST['email'];
	$cv=$_POST['cv'];
	$l=$_POST['luong'];
	$tendn=$_POST['tendn'];
	$mk=$_POST['mk'];
	$data = $obj->insert($ma,$ten,$gt,$ns,$dc,$dt,$e,$cv,$l,$tendn,$mk);
}
	$data = $obj->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhân viên</title>
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
<legend>Nhập thông tin nhân viên</legend>
<form action="themnhanvien.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã nhân viên :</td>
        <td><input type="text" name="manv"></td>
    </tr>
    <tr>
    	<td>Họ tên nhân viên :</td>
        <td><input type="text" name="hoten" /></td>
    </tr>
    <tr>
    	<td>Giới tính : </td>
  		<td>
        	<input type="radio" name="gt" value="1" checked/>Nam &nbsp;
            <input type="radio" name="gt" value="0"/> Nữ
        </td>  
    </tr>
    <tr>
    	<td> Ngày sinh :</td>
        <td><input type="date" name="ns"/></td>
     </tr>
     <tr>
     	<td>Địa chỉ : </td>
        <td><input type="text" name="dc"/></td>
     </tr>
     <tr>
     	<td>Điện thoại : </td>
        <td><input type="text" name="dt"/></td>
     </tr>
     <tr>
     	<td>Email :</td>
        <td><input type="text" name="email"/></td>
     </tr>
     <tr>
     	<td>Chức vụ :</td>
        <td><input type="text" name="cv"/></td>
     </tr>
     <tr>
     	<td>Lương :</td>
        <td><input type="text" name="luong"/></td>
     </tr>
     <tr>
     	<td>Tên đăng nhập :</td>
        <td><input type="text" name="tendn"/></td>
     </tr>
     <tr>
     	<td>Mật khẩu :</td>
        <td><input type="text" name="mk"/></td>
     </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td>
    </tr>
</table>
</form>
</fieldset>
<br />
<table class="tb" align="center">
<thead>
<tr>
	<th> Mã nhân viên</th>
    <th>Họ tên nhân viên</th>
    <th>Giới tính</th>
    <th>Ngày sinh </th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>
    <th>Email</th>
    <th>Chức vụ</th>
    <th>Lương</th>
    <th>Tên đăng nhập</th>
    <th>Mật khẩu</th>
    <th>Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["manv"]; ?></td><!-- tên bảng-->
        <td><?php echo $r["hotennv"]; ?></td>
        <td><?php echo $r["gioitinh"]; ?></td>
        <td><?php echo $r["ngaysinhnv"]; ?></td>
        <td><?php echo $r["diachinv"]; ?></td>
        <td><?php echo $r["dienthoainv"]; ?></td>
        <td><?php echo $r["email"]; ?></td>
        <td><?php echo $r["chucvu"]; ?></td>
        <td><?php echo $r["luong"]; ?></td>
        <td><?php echo $r["tendangnhap"]; ?></td>
        <td><?php echo $r["matkhau"]; ?></td>
        <td>
        <a href="xoanhanvien.php?manv=<?php echo $r["manv"]; ?>">Xóa</a> &nbsp;
        <a href="suanhanvien.php?manv=<?php echo $r["manv"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>