<?php

//1.Ket noi //2. Viet sql //3. Thuc thi//4. Xu ly ket qua
//5. dong ket noi
include "config.php";
include "autoload.php";
$obj = new nhanvien();
$ma = $_GET["manv"];
if(isset($_POST['sm']))
{
	$ten = $_POST["hoten"];
	$gt = $_POST["gioitinh"];
	$ns = $_POST["ngaysinh"];
	$dc = $_POST["diachi"];
	$dt = $_POST["dienthoai"];
	$e = $_POST["email"];
	$cv = $_POST["chucvu"];
	$l = $_POST["luong"];
	$tendn = $_POST["tendn"];
	$mk= $_POST["mk"];
	$data = $obj->update($ma,$ten,$gt,$ns,$dc,$dt,$e,$cv,$l,$tendn,$mk);
	header("location:themnhanvien.php");
}
	$o2 = $obj->getOne($ma);
	$data=$obj->getAll();
?>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/form.css"/>
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
<form method="post" action="" enctype="multipart/form-data">
	<?php
	foreach ($o2 as $v) {
		?>
        <table align="center">
		<tr>
        	<td>Mã nhân viên :</td>
            <td><input type="text" name="manv" value="<?php echo $v["manv"];?>" disabled /></td>
        </tr>
       	<tr>
            <td>Họ tên nhân viên :</td>
            <td><input type="text" name="hoten" value="<?php echo $v["hotennv"];?>" /></td>
        </tr>
        <tr>
            <td>Giới tính :</td>
            <td>
            	<input type="radio" name="gioitinh" checked value="<?php echo $v["gioitinh"];?>" />Nam &nbsp;
            <input type="radio" name="gioitinh" value="<?php echo $v["gioitinh"];?>" />Nữ</td>
        </tr>
       	<tr>
            <td>Ngày sinh :</td>
            <td><input type="date" name="ngaysinh" value="<?php echo $v["ngaysinhnv"];?>" /></td>
        </tr>      
       	<tr>
            <td>Địa chỉ :</td>
            <td><input type="text" name="diachi" value="<?php echo $v["diachinv"];?>" /></td>
        </tr>  
       	<tr>
            <td>Điện thoại:</td>
            <td><input type="text" name="dienthoai" value="<?php echo $v["dienthoainv"];?>" /></td>
        </tr>
       	<tr>
            <td>Email :</td>
            <td><input type="text" name="email" value="<?php echo $v["email"];?>" /></td>
        </tr>
       	<tr>
            <td>Chức vụ :</td>
            <td><input type="text" name="chucvu" value="<?php echo $v["chucvu"];?>" /></td>
        </tr>
       	<tr>
            <td>Lương :</td>
            <td><input type="text" name="luong" value="<?php echo $v["luong"];?>" /></td>
        </tr>
       	<tr>
            <td>Tên đăng nhập:</td>
            <td><input type="text" name="tendn" value="<?php echo $v["tendangnhap"];?>" /></td>
        </tr>
       	<tr>
            <td>Mật khẩu:</td>
            <td><input type="text" name="mk" value="<?php echo $v["matkhau"];?>" /></td>
        </tr>
     <?php
} ?>
 <tr><td colspan="2" align="center"><input type="submit" name="sm" value="Cập nhật" /></td></tr>
 	</table>
</form>
</fieldset>
