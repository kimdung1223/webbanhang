<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>MỸ PHẨM THIÊN NHIÊN</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" href="../css/main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
.product_box
{
	width:173px;
	height:auto;
	float:left;
	padding:10px;
	margin-right:100px;
	margin-left:15px;
}
.pro_box_top
{
	height:12px;
	background-image:url(../hinh/product_box_top.gif);
	
}
.pro_box_bot
{
	height:10px;
	background-image:url(../hinh/product_box_bottom.gif);
}
.pro_box_mid
{
	background-image:url(../hinh/product_box_center.gif);
}
.pro_title
{
	text-align:center;
	font-weight:bold;
	color:#000;
	font-size:14px;
}
.pro_title a
{
	text-decoration:none;
}

.pro_img
{
	text-align:center;
	padding:5px 0px;
}
.pro_img img
{
	height:100px;
}
.pro_detail
{
	float:right;
	font-size:14px;
	text-align:center;
}
.pro_detail a
{
	margin-right:10px;
	text-decoration:none;
	color:#060;
	font-weight:bold;
}
#cont_title
{
	text-align:left;
	margin-bottom:10px;
	font-weight:bold;
	margin-left:5px;
	font-size:24px;
}
</style><!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<?php include('../include/header.php'); ?> 
        </div>
        <div id="menu">
        	<?php include('../include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('../include/left.php'); ?>
            </div>
            <div class="content"><!-- TemplateBeginEditable name="EditRegion1" -->
             <div id="cont_title">Tin tức</div>
              <div class="product_box">
                <div class="pro_box_top"></div>
                <div class="pro_box_mid">
                  <div class="pro_title"><a href="../news1.php">LÀM ĐẸP TỪ<br/>THIÊN NHIÊN</a></div>
                  <div class="pro_img"><a href="../news1.php"><img src="../hinh/dong-y.jpg"/></a></div>
                  <div class="pro_detail"><a href="../news1.php">Xem thêm </a></div>
                  <div style="clear:both"></div>
                </div>
                <div class="pro_box_bot"></div>
              </div>
              <div class="product_box">
                <div class="pro_box_top"></div>
                <div class="pro_box_mid">
                  <div class="pro_title"><a href="../news2.php">ƯU ĐIỂM MỸ PHẨM<br/>TỰ NHIÊN</a></div>
                  <div class="pro_img"><a href="../news2.php"><img src="../hinh/chamsocda.jpg"/></a></div>
                  <div class="pro_detail"><a href="../news2.php">Xem thêm </a></div>
                  <div style="clear:both"></div>
                </div>
                <div class="pro_box_bot"></div>
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
