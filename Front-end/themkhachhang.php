<?php
include "config.php";
include "autoload.php";
$obj = new khachhang();
function checkEmail($string)
  {
  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
   return true;
  return false; 
  }
if (isset($_POST['Submit']))
{
	$ma = $_POST['makhachhang'];
	$ten = $_POST['hoten'];
	$gt=$_POST['gt'];
	$ns=$_POST['ns'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$e=$_POST['email'];
	$tendn=$_POST['tendn'];
	$mk=$_POST['mk'];
	if($ma=="")
	{
		echo "Vui lòng nhập mã!";
	}
	else if($ten=="")
	{
		echo "Vui lòng nhập họ tên!";
	}
	else if($dc=="")
	{
		echo "Vui lòng nhập địa chỉ!";
	}
	else if($dt=="")
	{
		echo "Vui lòng nhập số điện thoại!";
	}
	else if($e=="")
	{
		echo"Vui lòng nhập email!";
	}
	else if(checkEmail($e)==false)
	{
		echo "Định dạng email sai!";
	}
	else if($tendn=="")
	{
		echo "Vui lòng nhập tên đăng nhập!";
	}
	else if($mk=="")
	{
		echo "Vui lòng nhập mật khẩu!";
	}
	else
	{
		$data = $obj->insert($ma,$ten,$gt,$ns,$dc,$dt,$e,$tendn,$mk);
	}
	}
	$data = $obj->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khách hàng</title>
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
                    	<li><a href="themphieunhap">Phiếu nhập</a></li>
                        <li><a href="themphieuxuat">Phiếu xuất</a></li>
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
<legend>Nhập thông tin khách hàng</legend>
<form action="themkhachhang.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã khách hàng :</td>
        <td><input type="text" name="makhachhang"></td>
    </tr>
    <tr>
    	<td>Họ tên khách hàng :</td>
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
        <td><input type="number" name="dt" placeholder="Phải nhập số!"/></td>
     </tr>
     <tr>
     	<td>Email :</td>
        <td><input type="text" name="email"/></td>
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
	<th>Mã khách hàng</th>
    <th>Họ tên khách hàng</th>
    <th>Giới tính</th>
    <th>Ngày sinh </th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>
    <th>Email</th>
    <th>Tên đăng nhập</th>
    <th>Mật khẩu</th>
    <th>Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["makh"]; ?></td><!-- tên bảng-->
        <td width="15%">
			<b><?php echo $r["hotenkh"]; ?></b>
        	<?php
				$obj = new khachhang();
				$a=$obj->getbyOnePH( $r["makh"]);
				$b=$obj->getbyOneBLSP($r["makh"]);
				echo "<br>(Gửi&nbsp;".count($a)."&nbsp;phản hồi <br>";
				echo "&nbsp;Gửi".count($b)."&nbsp;bình luận sản phẩm)";
			?>
        </td>
        <td><?php echo $r["gioitinh"]; ?></td>
        <td><?php echo $r["ngaysinh"]; ?></td>
        <td><?php echo $r["diachikh"]; ?></td>
        <td><?php echo $r["dienthoaikh"]; ?></td>
        <td><?php echo $r["email"]; ?></td>
        <td><?php echo $r["tendangnhap"]; ?></td>
        <td><?php echo $r["matkhau"]; ?></td>
        <td>
        <a href="xoakhachhang.php?makhachhang=<?php echo $r["makh"]; ?>">Xóa</a> &nbsp;
        <a href="suakhachhang.php?makhachhang=<?php echo $r["makh"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>