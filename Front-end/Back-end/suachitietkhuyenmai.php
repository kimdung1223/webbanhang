<?php
//lỗi!!!

//1.Ket noi //2. Viet sql //3. Thuc thi//4. Xu ly ket qua
//5. dong ket noi
include "config.php";
include "autoload.php";
$obj = new chitietkhuyenmai();
$o3=new sanpham();
$ma = $_GET["makm"];
if(isset($_POST['sm']))
{
	$masp=$_POST['masp'];
	$nd= $_POST["nd"];
	$pt=$_POST['pt'];
	$data = $obj->update($ma,$masp,$nd,$pt);
	header("location:themphanhoi.php");
}
	$o2 = $obj->getOne($ma);
	$data=$obj->getAll();
	$a=$o3->getAll();
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
<legend>Nhập thông tin phản hồi</legend>
<form method="post" action="" enctype="multipart/form-data">
	<?php
	foreach ($o2 as $v) {
		?>
        <table align="center">
		<tr>
        	<td>Mã khuyến mãi:</td>
            <td><input type="text" name="makm" value="<?php echo $v["makm"];?>"/></td>
        </tr>
        <tr>
        	<td>Mã sản phẩm :</td>
            <td><input type="text" name="masp" value="<?php echo $v["masp"];?>"/></td>
        </tr>
       	<tr>
            <td>Nội dung khuyến mãi:</td>
            <td><textarea name="nd"><?php echo $v["noidungkm"];?></textarea></td>
        </tr>
        <tr>
        	<td>Phần trăm giảm giá :</td>
            <td><input type="text" name="pt" value="<?php echo $v["phantramgiamgia"];?>"/></td>
        </tr>
     <?php
} ?>
 <tr><td colspan="2" align="center"><input type="submit" name="sm" value="Cập nhật" /></td></tr>
 	</table>
</form>
</fieldset>
