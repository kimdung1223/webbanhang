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
	width:190px;
	height:220px;
	margin-top:50px;
	margin-left:15px;
	float:left;
}
#cont_right font
{
	margin-top:30px;
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
	margin-top:10px;
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
	margin-top:5px;
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
              	<img src="hinh/sp/dầu dưỡng/dauhatnho.jpg"/>
              </div>
              <div id="cont_right">
           		<div id="cont_right_title"><?php 
						$obj = new sanpham();
						$data=$obj->getOne("DHNHO");
						echo $data[0]["tensp"];?></div>
              	<div id="cont">
                    	&nbsp;&nbsp;&nbsp;&nbsp;
                    	<p>Thành Phần: 100% nguyên chất.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;Công Dụng:<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;Công dụng dầu hạt nho Grape seed oil :<br/>

    &nbsp;&nbsp;&nbsp;&nbsp;- Có nhiều chất chống oxy hóa hơn vitamin C và E. Dầu hạt nho là một chất chống oxy hóa rất mạnh.<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;- Khoa học đã chứng minh mức độ chống oxy hóa của loại dầu này còn cao hơn những loại hoa quả và thực phẩm chứa vitamin E và C.<br/>
                    	  &nbsp;&nbsp;&nbsp;&nbsp;- Giảm thiểu tối đa sự lão hóa da.<br/>
                    	  &nbsp;&nbsp;&nbsp;&nbsp; - Liệu pháp trị mụn tự nhiên.<br/>
                    	  &nbsp;&nbsp;&nbsp;&nbsp; - Dễ dàng thấm nhanh qua da, giúp làm se lỗ chân lông dịu nhẹ.<br/>
                    	  &nbsp;&nbsp;&nbsp;&nbsp;- Không gây dị ứng da.<br/>
                    	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Dầu hạt nho rất tốt cho những mái tóc mỏng, dễ gãy rụng và bị hư tổn, nuôi dưỡng từng sợi tóc, giúp tóc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chắc khoẻ hơn.
              	</p></div>
                 <div>
               	   <div id="pro_price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giá : 23.000</div>
                    <div id="pro_cart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="self.location.href='../Front-end/giohang.php?ac=add&id=<?php echo $data[0]["masp"];?>'">Mua hàng</button></div>
                 </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.myphamhandmade.cf&amp;width=121&amp;layout=button_count&amp;action=like&amp;size=small&amp;show_faces=false&amp;share=true&amp;height=46&amp;appId" width="121" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
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
