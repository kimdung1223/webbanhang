<?php
//lỗi!!!
include "config.php";
include "autoload.php";
$obj = new tintuc();
$o2=new nhanvien();
if (isset($_POST['Submit']))
{
	$manv=$_POST['manv'];
	$ma = $_POST['matt'];
	$ten = $_POST['tentt'];
	$nd=$_POST['nd'];
	$data = $obj->insert($manv,$ma,$ten,$nd);
}
	$data = $obj->getAll();
	$a=$o2->getAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tin tức</title>
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
<legend>Nhập thông tin tin tức</legend>
<form action="themtintuc.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
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
    	<td>Mã tin tức :</td>
        <td><input type="text" name="matt"></td>
    </tr>
    <tr>
    	<td>Tên tin tức :</td>
        <td><input type="text" name="tentt" /></td>
    </tr>
    <tr>
    	<td>Nội dung tin tức :</td>
        <td><textarea name="nd"></textarea></td>
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
    <th>Mã tin tức</th>
    <th> Tên tin tức</th>
    <th>Nội dung tin tức</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["manv"]; ?></td><!-- tên bảng-->
        <td> <?php echo $r["matt"]; ?></td>
        <td><?php echo $r["tentt"]; ?></td>
        <td> <?php echo $r["noidungtt"]; ?></td>
        <td>
        <a href="xoatintuc.php?matt=<?php echo $r["matt"]; ?>">Xóa</a> &nbsp;
        <a href="suatintuc.php?matt=<?php echo $r["matt"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>