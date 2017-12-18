<?php
include "config.php";
include "autoload.php";
$obj = new sanpham();
$o3=new loaisanpham();
if (isset($_POST['Submit']))
{	
	$maloai=$_POST['maloai'];
	$ma=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$name = $_FILES["hinh"]["name"];
	$name2 = time() ."_".$name;
	$err="";
	$mota=$_POST['mota'];
	$dvi=$_POST['dvt'];
	$gia=$_POST['gia'];
	if(strlen($name)>0)
    {
		//print_r($_FILES);
        $errFile = $_FILES["hinh"]["error"];
        if ($errFile>0)
            $err .="Lỗi file hình <br>";
        else
        {
            $type = $_FILES["hinh"]["type"];
			//echo $type;
            $arrImg = array("image/png", "image/jpg", "image/jpeg", "image/bmp");
            if (!in_array($type, $arrImg))
                $err .="Không phải file hình <br>";
            else
            {   $temp = $_FILES["hinh"]["tmp_name"];
                if (!move_uploaded_file($temp, "hinhanh/".$name2))
                    $err .="Không thể lưu file<br>";
				//echo ":hinh: $temp , hinh/$name <br>";
            }
        }
	}
	if($ma=="")
	{
		echo "Vui lòng nhập mã sản phẩm!";
	}
	else if($tensp=="")
	{
		echo "Vui lòng nhập tên sản phẩm!";
	}
	else if($mota=="")
	{
		echo " Vui lòng nhập mô tả!";
	}
	else if($gia=="")
	{
		echo "Vui lòng nhập giá tiền!";
	}
	else
	{
		$data = $obj->insert($maloai,$ma,$tensp,$name2,$mota,$dvi,$gia);
	}
}
	$data = $obj->getAll();
	$a=$o3->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm</title>
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
<legend>Nhập thông tin sản phẩm</legend>
<form action="themsanpham.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã loại :</td>
        <td><select name="maloai" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["maloaisp"]; ?>"><?php echo $v["maloaisp"]; ?></option>
                                    <?php
                                } ?>
                                </select></td>
    </tr>
    <tr>
    	<td>Mã sản phẩm</td>
        <td><input type="text" name="masp" /></td>
    </tr>
    <tr>
    	<td>Tên sản phẩm :</td>
        <td><input type="text" name="tensp" /></td>
    </tr>
    <tr>
    	<td>Hình ảnh :</td>
        <td><input type="file" name="hinh" /></td>
    </tr>
    <tr>
    	<td>Mô tả :</td>
        <td><textarea name="mota"></textarea></td>
    </tr>
    <tr>
    	<td>Đơn vị tính :</td>
        <td>
        	<select name="dvt">
            	<option>Chai</option>
                <option>Bộ</option>
                <option>Hũ</option>
                <option>Cây</option>
                <option>Bánh</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Giá tiền :</td>
        <td><input type="number" name="gia" placeholder="Nhập dữ liệu số!"/></td>
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
	<th> Mã loại</th>
    <th>Mã sản phẩm</th>
    <th> Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Mô tả </th>
    <th>Đơn vị tính</th>
    <th>Giá tiền</th>
    <th> Thao tác</th>
</tr>
</thead>
<?php
foreach($data as $r)
{ ?>
    <tr>
    	<td> <?php echo $r["maloaisp"]; ?></td>
        <td> <?php echo $r["masp"]; ?></td>
        <td width="15%">
			<b><?php echo $r["tensp"]; ?></b>
        	<?php
			$obj = new sanpham();
			$a=$obj->getbyOneCTDH( $r["masp"]);
			$b=$obj->getbyOneCTPN( $r["masp"]);
			$c=$obj->getbyOneCTPX( $r["masp"]);
			$d=$obj->getbyOneBLSP( $r["masp"]);
			echo "<br>(Có&nbsp;".count($a)."&nbsp;đơn hàng được lập"; 
			echo "<br> &nbsp;Có&nbsp;".count($b)."&nbsp;phiếu nhập được lập";
			echo "<br> &nbsp;Có&nbsp;".count($c)."&nbsp;phiếu xuất được lập";  
			echo "<br> &nbsp;Có&nbsp;".count($d)."&nbsp;được bình luận)"; 
			?>
        
        </td>
        <td><img src="hinhanh/<?php echo $r["hinhanh"]; ?>"/></td>
        <td> <?php echo $r["motasp"]; ?></td>
        <td> <?php echo $r["dvt"]; ?></td>
        <td> <?php echo $r["giatien"]; ?></td>
        <td>
        <a href="xoasanpham.php?masp=<?php echo $r["masp"]; ?>">Xóa</a> &nbsp;
        <a href="suasanpham.php?masp=<?php echo $r["masp"]; ?>">Sửa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>