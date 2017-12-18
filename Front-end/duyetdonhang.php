<?php
//1.Ket noi //2. Viet sql //3. Thuc thi//4. Xu ly ket qua
//5. dong ket noi
include "config.php";
include "autoload.php";
$obj = new donhang();
$ma = $_GET["madh"];
$obj = new donhang();
$o3 = new nhanvien();
$ma = $_GET["madh"];
if(isset($_POST['sm']))
{
	$ma=$_POST['madh'];
	$manv=$_POST['manv'];
	$ten=$_POST['hoten'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$ngay=$_POST['ngaylapdh'];
	$trangthai=$_POST['tinhtrang'];
	$data = $obj->update($ma,$manv,$ten,$dc,$dt,$ngay,0,$trangthai);
	header("location:themdonhang.php");
}
	$o2 = $obj->getOne($ma);
	$data=$obj->getAll();
	//$a=$o3->getAll();
?>
<link rel="stylesheet" href="css/main_ad.css"/>
<link rel="stylesheet" href="css/form.css"/>
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
<form method="post" action="" enctype="multipart/form-data">
	<?php
	foreach ($o2 as $v) {
		?>
        <table align="center">
        <tr>
        	<td>Mã đơn hàng:</td>
            <td><input type="text" name="madh" value="<?php echo $v["madh"];?>" readonly/></td>
        </tr>
         <tr>
    	<td>Mã nhân viên :</td>
        <td><input type="text" name="manv" value="<?php echo $v["manv"]; ?>" readonly/></td>
    </tr>
     <tr>
    	<td>Họ tên người nhận :</td>
        <td><input type="text" name="hoten" value="<?php echo $v["hotennguoinhan"]; ?>" readonly/></td>
    </tr>
     <tr>
    	<td>Địa chỉ người nhận :</td>
        <td><input type="text" name="dc" value="<?php echo $v["diachinguoinhan"]; ?>" readonly /></td>
    </tr>
     <tr>
    	<td>Điện thoại người nhận :</td>
        <td><input type="number" name="dt" value="<?php echo $v["dienthoainguoinhan"]; ?>" readonly /></td>
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
            <td><input type="text" name="tinhtrang" value="Đã xử lý" readonly/></td>
        </tr>
     <?php
} ?>
 <tr><td colspan="2" align="center"><input type="submit" name="sm" value="Duyệt" /></td></tr>
 	</table>
</form>
</fieldset>