<?php
// Lỗi!!!
//1.Ket noi //2. Viet sql //3. Thuc thi//4. Xu ly ket qua
//5. dong ket noi
include "config.php";
include "autoload.php";
$obj = new sanpham();
$o3= new loaisanpham();
$ma=$_GET['masp'];
if(isset($_POST['sm']))
{
	$maloai=$_POST['maloai'];
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
                if (!move_uploaded_file($temp, "hinh/".$name2))
                    $err .="Không thể lưu file<br>";
				//echo ":hinh: $temp , hinh/$name <br>";
            }
        }
	}
	$data = $obj->update($maloai,null,$tensp,$name2,$mota,$dvi,$gia);
	//print_r($data);
	header("location:themsanpham.php");
}
$o2 = $obj->getOne($ma);
$data=$obj->getAll();
$a= $o3->getAll();
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
    <form action="" method="post" enctype="multipart/form-data">
<?php
	foreach ($o2 as $v) {
		?>
        <fieldset>
<legend>Nhập thông tin sản phẩm</legend>
<form action="themsanpham.php" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Mã loại :</td>
        <td> <select name="maloai" >
                            <?php
                                foreach($a as $x)
                                { ?>
                                    <option value="<?php echo $v["maloaisp"]; ?>" 
                                    	<?php
										if($x["maloaisp"]==$v["maloaisp"])
											echo "selected"; ?>
                                    	><?php echo $x["maloaisp"]; ?></option>
                                    <?php
                                } ?>
                                </select></br></td>
    </tr>
    <tr>
    	<td>Mã sản phẩm :</td>
        <td><input type="text" name="masp" value="<?php echo $v["masp"];?>" disabled/></td>
    </tr>
     <tr>
    	<td>Tên sản phẩm :</td>
        <td><input type="text" name="tensp" vlaue="<?php echo $v["tensp"];?>" /></td>
    </tr>
     <tr>
    	<td>Hình ảnh :</td>
        <td><input type="file" name="hinh"  value="<?php echo $v["hinhanh"]; ?>"/></td>
    </tr>
     <tr>
    	<td>Mô tả :</td>
        <td><textarea name="mota" ></textarea></td>
    </tr>
     <tr>
    	<td>Đơn vị tính :</td>
        <td><input type="text" name="dvt" value="<?php echo $v["dvt"]; ?>"/></td>
    </tr>
     <tr>
    	<td>Giá tiền :</td>
        <td><input type="text" name="gia" value="<?php echo $v["giatien"];?>" /></td>
    </tr>
        <?php
} ?>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Cập nhật" name="sm"></td>
    </tr>
</table>
</form>
</fieldset>