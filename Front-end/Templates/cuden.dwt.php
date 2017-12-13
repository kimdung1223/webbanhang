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
#cont_left
{
	float:left;
}
#cont_left img
{
	width:300px;
	margin-top:50px;
	margin-left:10px;
}
#cont_right font
{
	margin-top:50px;
	margin-left:50px;
}
#cont_right p
{
	margin-left:50px;
}
#cont_right_title
{
	font-weight:bold;
	text-align:center;
	margin-top:50px;
}
#cont
{
	margin-left:10px;	
}
#pro_price
{
	font-weight:bold;
}
iframe
{
	margin-top:10px;
}
</style><!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
            <div id="cont_left">
              	<img src="../hinh/sp/bột/botcuden.jpg"/>
              </div>
              <div id="cont_right">
           		<div id="cont_right_title">
				<?php 
				include "config.php";
				include "autoload.php";
				$obj = new sanpham();
				$data=$obj->getOne("CD");
				echo $data[0]["tensp"];?></div>
              	<div id="cont">
                    	&nbsp;&nbsp;&nbsp;&nbsp;Thành Phần: 100% từ hạt củ dền nguyên chất.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;Công Dụng:<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Dưỡng trắng hồng da.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Cung cấp chất dinh dưỡng cho da.<br/>
                       &nbsp;&nbsp;&nbsp;&nbsp; - Có tác dụng chống lão hóa mạnh.<br/>          
                 </div>
                 <div>
                 	<div id="pro_price"> &nbsp;&nbsp;&nbsp;&nbsp;Giá : 30.000</div>
                    <div id="pro_cart">&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="self.location.href='../Front-end/giohang.php?ac=add&id=<?php echo $data[0]["masp"];?>'">Mua hàng</button></div>
                 </div>
               &nbsp;&nbsp; <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.myphamhandmade.cf&width=121&layout=button_count&action=like&size=small&show_faces=false&share=true&height=46&appId" width="121" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              <div class="fb-comments" data-href="https://www.facebook.com/botkanshop" data-width="943" data-numposts="5"></div>
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
