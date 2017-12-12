<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/xpdaudua.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>MỸ PHẨM THIÊN NHIÊN</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="css/main.css" />
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
</style><!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
        	<?php include('include/header.php'); ?> 
        </div>
        <div id="menu">
        	<?php include('include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('include/left.php'); ?>
            </div>
            <div class="content"><!-- InstanceBeginEditable name="EditRegion1" -->
            <div id="cont_left">
              	<img src="hinh/sp/Xà phòng/daudua.jpg"/>
              </div>
              <div id="cont_right">
           		<div id="cont_right_title"><?php 
						$obj = new sanpham();
						$data=$obj->getOne("XPDD");
						echo $data[0]["tensp"];?> </div>
              	<div id="cont">
                    	&nbsp;&nbsp;&nbsp;&nbsp;Thành phần chính từ: bơ hạt mỡ, bơ ca cao, dầu ô-liu, dầu dừa, dầu cám gạo, chiết xuất dầu jojoba nước cất, thuốc kiềm, tinh dầu hoắc hương,...<br/>

&nbsp;&nbsp;&nbsp;&nbsp;CÔNG DỤNG:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;✔ Giúp da trắng mịn, sáng hồng hào khỏe mạnh<br/>
&nbsp;&nbsp;&nbsp;&nbsp;✔ Giữ ẩm tuyệt vời cho da khô, da nhạy cảm<br/>
&nbsp;&nbsp;&nbsp;&nbsp;✔ Giảm mụn, ngăn ngừa lão hóa da<br/>
                        
                 </div>
                 <div>
                 	<div id="pro_price"> &nbsp;&nbsp;&nbsp;&nbsp;Giá : 60.000</div>
                    <div id="pro_cart">&nbsp;&nbsp;&nbsp;&nbsp;	<button onclick="self.location.href='../Front-end/giohang.php?ac=add&amp;id=<?php echo $data[0]["masp"];?>'">Mua hàng</button></div>
                 </div>
               &nbsp;&nbsp; <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.myphamhandmade.cf&amp;width=121&amp;layout=button_count&amp;action=like&amp;size=small&amp;show_faces=false&amp;share=true&amp;height=46&amp;appId" width="121" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
              <div class="fb-comments" data-href="https://www.facebook.com/botkanshop" data-width="943" data-numposts="5"></div>
              </div>
            <!-- InstanceEndEditable -->
            	
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('include/footer.php'); ?>
      </div>
    </div>
</body>
<!-- InstanceEnd --></html>
