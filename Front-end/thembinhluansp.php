<?php
include "config.php";
include "autoload.php";
$obj = new binhluansp();
$o2 = new khachhang();
$o3=new sanpham();
//print_r($_POST);
if (isset($_POST['Submit']))
{
	$ma=$_POST['mabl'];
	$makh=$_POST['makh'];
	$masp=$_POST['masp'];
	$ngay=$_POST['ngay'];
	$nd=$_POST['noidungblsp'];
	$data = $obj->insert($ma,$makh,$masp,$ngay,$nd);
	
}
$data = $obj->getAll();
$a= $o2->getAll();
$b=$o3->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bình luận sản phẩm</title>
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
                <li><a href="#">Phiếu nhập / xuất</a>
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
<legend>Nhập thông tin bình luận sản phẩm</legend>
<form action="thembinhluansp.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã bình luận sản phẩm :</td>
        <td><input type="text" name="mabl"></td>
    </tr>
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
    	<td>Mã sản phẩm:</td>
        <td><select name="masp" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["masp"]; ?>"><?php echo $v["masp"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
     <tr>
    	<td>Ngày bình luận sản phẩm:</td>
        <td><input type="date" name="ngay" /></td>
    </tr>
     <tr>
    	<td>Nội dung bình luận sản phẩm:</td>
        <td><textarea name="noidungblsp"></textarea></td>
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
	<th> Mã bình luận sản phẩm </th>
    <th>Mã khách hàng</th>
    <th> Mã sản phẩm</th>
    <th>Ngày bình luận sản phẩm</th>
    <th>Nội dung bình luận sản phẩm</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
          <td> <?php echo $r["mablsp"]; ?></td>
        <td> <?php echo $r["makh"]; ?></td>
        <td><?php echo $r["masp"]; ?></td>
        <td><?php echo $r["ngayblsp"]; ?></td>
        <td><?php echo $r["noidungblsp"]; ?></td>
        <td>
        <a href="xoabinhluansp.php?mabl=<?php echo $r["mablsp"]; ?>">Xoá</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>