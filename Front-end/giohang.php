<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MỸ PHẨM THIÊN NHIÊN</title>
<link rel="stylesheet" href="css/main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
</body>
<?php
	if (!isset($_SESSION)) session_start();
					include "config.php";
					include "autoload.php";
					$db= new Db();
					$cart = new cart();
?>
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
 
            <div id="top_right">
                <img src="hinh/contact-new.png" /> <a href="reg.php">&nbsp;Đăng ký</a>
                &nbsp;&nbsp;
                <img src="hinh/login.PNG" width="18px" height="14px"/><a href="login.php">&nbsp;Đăng nhập</a>
                &nbsp;&nbsp;
                <img src="hinh/logout.png" width="18px" height="14px" /><a href="logout.php" >&nbsp;Đăng xuất</a>
                &nbsp;&nbsp;
                <img src="hinh/cart.gif" /><a href="giohang.php">&nbsp;Giỏ hàng&nbsp;(<?php echo  $cart->getNumItem();?>) </a>
            	&nbsp;&nbsp;
                <img src="hinh/login_ad.png" width="18px" height="14px" /><a href="dangnhap.php">&nbsp;Admin</a>
            </div>
            <div style="clear:both"></div>
            <div id="banner"></div>
        </div>
        <div id="menu">
        	<?php include('include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('include/left.php'); ?>
            </div>
            <div class="content">
            	<?php
					
					
					$ac= getIndex("ac");
					function getIndex($index, $value='')
					{
						$data = isset($_GET[$index])? $_GET[$index]:$value;
					
						return $data;
					}
					
					function postIndex($index, $value='')
					{
						$data = isset($_POST[$index])? $_POST[$index]:$value;
						return $data;
					}
					
					function requestIndex($index, $value='')
					{
						$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
						return $data;
					}
					if ($ac=="add")
					{
						$quantity = getIndex("quantity", 1);
						$id = getIndex("id");
					
						$cart->add($id, $quantity);
						
						/*echo $id."</br>";
						echo $quantity;*/exit;
					}
					//Biến $cart được tạo từ trang chủ index.php
					if ($ac=="del")
							{
								$quantity = getIndex("quantity", 1);
								$id = getIndex("id");
								$cart->remove($id);
							}
						
				?>
									<?php
										$cart->show();
									?>
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('include/footer.php'); ?>
      </div>
      
    </div>
</body>
</html>
