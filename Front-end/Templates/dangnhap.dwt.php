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
            <form name="flogin" action="#" method="post" enctype="multipart/form-data">
             <table border="0" width="100%">
            <tr>
            <td colspan="5" align="center"><b>ĐĂNG NHẬP TÀI KHOẢN</b></td>
            </tr>
            <tr>
              <td >&nbsp;</td>
              <td id="username">Tên đăng nhập</td>
           	  <td ><input type="text" name="nmUsername" size="30"/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td id="pass">Mật khẩu</td>
              <td ><input type="password" name="nmPassword" size="30"/></td>
            </tr>
            <tr>
            	 <td>&nbsp;</td>
            	<td align="center"><input type="submit" name="nmLogIn" size="30" value="Đăng nhập" onclick="checkInput()"/></td>
            </tr>
            </table>
            
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
