<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MỸ PHẨM THIÊN NHIÊN</title>
<link rel="stylesheet" href="css/main.css"/>
<style>
@charset "utf-8";
/* CSS Document */
.tb
{
	height:400px;
	margin: 0 auto;
}
.tb, .tb th, .tb td 
{
	border:1px solid #000;
	padding: 5px;
	border-collapse:collapse;
}
.tb th
{
	background-color:#6FC;
}
.tb td img
{
	width:80px;
	height:80px;
	
	
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="container">
   	<div id="header">
   	  <div id="top_left">
	<form action="timkiem.php" method="post">
        <table  align="center">
        &nbsp;&nbsp;<input type="text" name="ts" placeholder="Tìm sản phẩm"/>&nbsp;&nbsp;
        <input type="submit" name="search" value="Tìm kiếm" />
        </table>
       </form>
	</div>
<?php
		include "config.php";
		include "autoload.php";
		 $obj = new sanpham();
        if (!isset($_POST["search"]))
        {
            $data = $obj->getAll();
        }
        else
        {
            $data = $obj->search($_POST["ts"]);
        }
        ?>
          <div id="top_right">
 
                <img src="hinh/contact-new.png" /> <a href="../reg.php">&nbsp;Đăng ký</a>
                &nbsp;&nbsp;
                <img src="hinh/login.PNG" width="18px" height="14px"/><a href="login.php">&nbsp;Đăng nhập</a>
                &nbsp;&nbsp;
                <img src="hinh/logout.png" width="18px" height="14px" /><a href="logout.php" >&nbsp;Đăng xuất</a>
                &nbsp;&nbsp;
                <img src="hinh/cart.gif" /><a href="../giohang.php">&nbsp;Giỏ hàng&nbsp;</a>
            	&nbsp;&nbsp;
                <img src="hinh/login_ad.png" width="18px" height="14px" /><a href="dangnhap.php">&nbsp;Admin</a>
            </div>
            <div style="clear:both"></div>
            <div id="banner"></div>
        
        <div id="menu">
        	<?php include('include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('include/left.php'); ?>
            </div>
            <div class="content">
            	 <table class="tb">
            		<thead>
            			<tr>
                            <th width="15%">Tên sản phẩm</th>
                            <th width="10%">Hình ảnh</th>
                            <th width="30%">Mô tả sản phẩm</th>
                            <th width="15%">Giá tiền</th>
              			</tr>
            	    </thead>
           	 <?php
            foreach($data as $r)
            { ?>
                <tr>
                <td align="center"> <?php echo $r["tensp"]; ?></td>
                <td align="center"><img src="hinhanh/<?php echo $r["hinhanh"]; ?>"/></td>
                <td><?php echo $r["motasp"]; ?></td>
                <td align="center"><?php echo $r["giatien"]; ?></td>
                </tr>
                <?php
            }
            ?>
            </table> 
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('include/footer.php'); ?>
      </div>
      
    </div>
</body>
</html>

</html>
