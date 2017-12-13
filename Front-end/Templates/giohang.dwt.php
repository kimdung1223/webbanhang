
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>MỸ PHẨM THIÊN NHIÊN</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" href="../css/main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
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
        /*if (!isset($_POST["search"]))
        {
            $data = $obj->getAll();
        }
        else
        {
            $data = $obj->search($_POST["ts"]);
        }*/
        ?>
 
            <div id="top_right">
            	<?php 
				 /*if (isset($_SESSION['un']))
				 {
     	     		 echo "Chào&nbsp;"."<b>".$_SESSION['un']."</b>";
					 
     			}*/
?>&nbsp;
                <img src="hinh/contact-new.png" /> <a href="reg.php">&nbsp;Đăng ký</a>
                &nbsp;&nbsp;
                <img src="hinh/login.PNG" width="18px" height="14px"/><a href="login.php">&nbsp;Đăng nhập</a>
                &nbsp;&nbsp;
                <img src="hinh/logout.png" width="18px" height="14px" /><a href="logout.php" >&nbsp;Đăng xuất</a>
                &nbsp;&nbsp;
                <img src="hinh/cart.gif" /><a href="giohang.php">&nbsp;Giỏ hàng&nbsp;(<?php /*echo  $cart->getNumItem();*/?>) </a>
            	&nbsp;&nbsp;
                <img src="hinh/login_ad.png" width="18px" height="14px" /><a href="dangnhap.php">&nbsp;Admin</a>
            </div>
            <div style="clear:both"></div>
            <div id="banner"></div>
        </div>
        <div id="menu">
        	<?php include('../include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('../include/left.php'); ?>
            </div>
            <div class="content"><!-- TemplateBeginEditable name="EditRegion1" -->
                <div>
                	<?php
						$cart->show();
					?>
                </div>
            <!-- TemplateEndEditable -->
            	
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('../include/footer.php'); ?>
      </div>
      
    </div>
</body>
</html>
