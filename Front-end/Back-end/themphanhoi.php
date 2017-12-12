<?php
include "config.php";
include "autoload.php";
$obj = new phanhoi();
$o3=new khachhang();
$o4=new nhanvien();
if (isset($_POST['Submit']))
{
	$ma = $_POST['makh'];
	$manv=$_POST['manv'];
	$ngaynhan=$_POST['ngaynhan'];
	$ngaygui=$_POST['ngaygui'];
	$ndgui=$_POST['ndgui'];
	$ndnhan=$_POST['ndnhan'];
	$data = $obj->insert($ma,$manv,$ngaynhan,$ngaygui,$ndgui,$ndnhan);
}
	$data = $obj->getAll();
	$a=$o3->getAll();
	$b=$o4->getAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phản hồi</title>
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
<legend>Nhập thông tin phản hồi</legend>
<form action="themphanhoi.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
	<tr>
    	<td>Mã khách hàng :</td>
        <td><select name="makh" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["makh"]; ?>"><?php echo $v["makh"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
    <tr>
    	<td>Mã nhân viên :</td>
        <td><select name="manv" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["manv"]; ?>"><?php echo $v["manv"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
    <tr>
    	<td>Ngày nhận tin nhắn của khách :</td>
        <td><input type="date" name="ngaynhan"></td>
    </tr>
    <tr>
    	<td>Ngày gửi tin nhắn đến khách :</td>
        <td><input type="date" name="ngaygui" /></td>
    </tr>
    <tr>
    	<td>Nội dung tin nhắn gửi đến khách:</td>
        <td><textarea name="ndgui"></textarea></td>
    </tr>
    <tr>
    	<td>Nội dung tin nhắn khách gửi đến:</td>
        <td><textarea name="ndnhan"></textarea></td>
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
	<th>Mã khách hàng</th>
	<th> Mã nhân viên</th>
    <th>Ngày nhận tin nhắn của khách</th>
    <th>Ngày gửi tin nhắn đến khách</th>
    <th>Nội dung tin nhắn gửi đến khách</th>
    <th>Nội dung tin nhắn khách gửi đến</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["makh"]; ?></td>
    	<td> <?php echo $r["manv"]; ?></td><!-- tên bảng-->
        <td> <?php echo $r["ngaynhantn"]; ?></td>
        <td><?php echo $r["ngayguitn"]; ?></td>
        <td> <?php echo $r["noidungtngui"]; ?></td>
        <td><?php echo $r["noidungtnnhan"];?></td>
        <td>
        <a href="xoaphanhoi.php?makh=<?php echo$r["makh"];?>">Xoá &nbsp;</a>
        <a href="suaphanhoi.php?makh=<?php echo $r["makh"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>