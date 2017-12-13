<?php
//lỗi!!!

//1.Ket noi //2. Viet sql //3. Thuc thi//4. Xu ly ket qua
//5. dong ket noi
include "config.php";
include "autoload.php";
$obj = new phanhoi();
$o3=new khachhang();
$o4=new nhanvien();
$ma = $_GET["makh"];
if(isset($_POST['sm']))
{
	$manv=$_POST['manv'];
	$ngaynhan= $_POST["ngaynhan"];
	$ngaygui=$_POST['ngaygui'];
	$ndgui=$_POST['ndgui'];
	$ndnhan=$_POST['ndnhan'];
	$data = $obj->update($ma,$manv,$ngaynhan,$ngaygui,$ndgui,$ndnhan);
	header("location:themphanhoi.php");
}
	$o2 = $obj->getOne($ma);
	$data=$obj->getAll();
	$a=$o3->getAll();
	$b=$o4->getAll();
?>
<link rel="stylesheet" href="css/main.css"/>
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
<legend>Nhập thông tin phản hồi</legend>
<form method="post" action="" enctype="multipart/form-data">
	<?php
	foreach ($o2 as $v) {
		?>
        <table align="center">
		<tr>
        	<td>Mã khách hàng:</td>
            <td><input type="text" name="makh" value="<?php echo $v["makh"];?>" disabled/></td>
        </tr>
        <tr>
        	<td>Mã nhân viên :</td>
            <td><select name="manv" >
                            <?php
                                foreach($b as $x)
                                { ?>
                                    <option value="<?php echo $v["manv"]; ?>" 
                                    	<?php
										if($x["manv"]==$v["manv"])
											echo "selected"; ?>
                                    	><?php echo $x["manv"]; ?></option>
                                    <?php
                                } ?>
                                </select></br></td>
        </tr>
       	<tr>
            <td>Ngày nhận tin nhắn của khách:</td>
            <td><input type="date" name="ngaynhan" value="<?php echo $v["ngaynhantn"];?>" /></td>
        </tr>
        <tr>
            <td>Ngày gửi tin nhắn cho khách:</td>
            <td><input type="date" name="ngaygui" value="<?php echo $v["ngayguitn"];?>" /></td>
        </tr>
        <tr>
        	<td>Nội dung tin nhắn gửi đến khách :</td>
            <td><textarea name="ndgui"><?php echo $v["noidungtngui"];?></textarea></td>
        </tr>
         <tr>
        	<td>Nội dung tin nhắn khách gửi đê`n :</td>
            <td><textarea name="ndnhan" readonly><?php echo $v["noidungtnnhan"];?></textarea></td>
        </tr>
     <?php
} ?>
 <tr><td colspan="2" align="center"><input type="submit" name="sm" value="Cập nhật" /></td></tr>
 	</table>
</form>
</fieldset>
