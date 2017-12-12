<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/daudo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>MỸ PHẨM THIÊN NHIÊN</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="css/main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
</style>
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
            <div class="content"><!-- InstanceBeginEditable name="EditRegion1" --><div id="cont_left">
              	<img src="hinh/sp/bột/botdaudo.jpg"/>
              </div>
            <div id="cont_right">
       		  <div id="cont_right_title"><?php 
						$obj = new sanpham();
						$data=$obj->getOne("DD01");
						echo $data[0]["tensp"];?> </div>
           	  <div id="cont">
                    	&nbsp;&nbsp;&nbsp;&nbsp;Thành Phần: 100% từ hạt đậu đỏ nguyên chất.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;Công Dụng:<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Dưỡng trắng hồng da.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Tẩy tế bào chết, làm sạch da.<br/>
                       &nbsp;&nbsp;&nbsp;&nbsp; - Cung cấp dưỡng chất tái tạo làn da, Trị mụn.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;- Thích hợp với mọi loại da. <br/>
                        
                 </div>
                 <div>
               	   <div id="pro_price"> &nbsp;&nbsp;&nbsp;&nbsp;Giá : 20.000</div>
                    <div id="pro_cart">&nbsp;&nbsp;&nbsp;&nbsp;
                    	<button onclick="self.location.href='../Front-end/giohang.php?ac=add&amp;id=<?php echo $data[0]["masp"];?>'">Mua hàng</button>
                    </div>
                 </div>
               &nbsp;&nbsp; <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.myphamthiennhien.cf&amp;width=121&amp;layout=button_count&amp;action=like&amp;size=small&amp;show_faces=false&amp;share=true&amp;height=46&amp;appId" width="121" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
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
