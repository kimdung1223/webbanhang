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
	height:340px;
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
              	<img src="../hinh/sp/dầu dưỡng/dau-gac2.jpg"/>
              </div>
              <div id="cont_right">
           		<div id="cont_right_title"><?php 
						$obj = new sanpham();
						$data=$obj->getOne("DG");
						echo $data[0]["tensp"];?></div>
              	<div id="cont">
                    	&nbsp;&nbsp;&nbsp;&nbsp;Thành Phần: 100% nguyên chất.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;Được chiết xuất từ phần thịt và hạt gấc nguyên chất 100% không sử dụng thêm bất kỳ một loại phụ gia hay hóa chất nào. Hoàn toàn tự nhiên nên rất thân thiện, không dị ứng, phản ứng phụ nào cho người sử dụng.

&nbsp;&nbsp;&nbsp;&nbsp;Chứa một hàm lượng beta-caroten rất cao, hơn hẳn so với hàm lượng beta-caroten chứa trong cà rốt và dầu cá thu, ngoài ra dầu gấc còn chứa một hàm lượng vitamin A cao.<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Công dụng:<br/>

&nbsp;&nbsp;&nbsp;&nbsp;- Sử dụng tinh dầu gấc giúp ngăn ngừa lão hóa hiệu quả, mang lại một làn da mịn màng, mềm mại, sáng màu và khỏe mạnh.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;- Tinh dầu gấc còn giúp da mịn màng, se khít lỗ chân lông.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;- Ngoài ra đối việc trị nám, dầu gấc tỏ ra rất hữu dụng.<br/>
 
                      
                        
                 </div>
                 <div>
                 	<div id="pro_price"> &nbsp;&nbsp;&nbsp;&nbsp;Giá : 80.000</div>
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
