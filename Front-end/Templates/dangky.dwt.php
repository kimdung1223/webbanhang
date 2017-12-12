

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>FORM ĐĂNG KÝ</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" href="../Back-end/css/form.css"/>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

	<div id="container">
    	<div id="header">
        	<?php include('../Back-end/include/header.php'); ?> 
        </div>
        <div id="menu">
        	<?php include('../Back-end/include/menu.php'); ?>
        </div>
        <div id="main">
        	<div class="left">
            	<?php include('../Back-end/include/left.php'); ?>
            </div>
            <div class="content"><!-- TemplateBeginEditable name="EditRegion1" -->
            <?php
  include "../Back-end/config.php";
  include "../Back-end/autoload.php";
  $obj = new khachhang();
  $o1 = new khachhang();
  function checkEmail($string)
  {
	  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	   return true;
	  return false; 
  }
  if (isset($_POST["sm"]))
  {
    $email= $_POST['email'];
    $ma= md5($email);
    $psw = md5($_POST["psw"]);
    $pswr = $_POST["psw-repeat"];
	$ten = $_POST['hoten'];
	$gt=$_POST['gt'];
	$ns=$_POST['ns'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$tendn=$_POST['tendn'];
    if($email=="")
    {
      echo "Vui lòng nhập email!";
    }
    else if($psw=="")
    {
      echo "Vui lòng nhập mật khẩu!";
    }
    else if($pswr=="")
    {
      echo "Vui lòng nhập lại mật khẩu!";
	  if($pswr!=$psw)
	 	{ echo "Mật khẩu không trùng khớp!!!";}
	  else
	  	{echo"Mật khẩu trùng khớp";}
    }
	 else if($ten=="")
    {
      echo "Vui lòng nhập họ tên!";
    } 
	 else if($tendn=="")
    {
      echo "Vui lòng nhập tên đăng nhập!";
    } 
	 else if($dc=="")
    {
      echo "Vui lòng nhập địa chỉ!";
    } 
	else if($dt=="")
    {
      echo "Vui lòng nhập số điện thoại!";
    }
    else if (checkEmail($email)==false){
      echo "Định dạng email sai!<br>";
    }
    else
    {
      $q = $o1->getAll();
      foreach($q as $v)
      {
        if($v['Email']==$email)
        {
            echo "Tài khoản đã tồn tại";
            
        }
        else
          $data = $obj->insert($ma, $ten ,$gt,$ns,$dc,$dt,$email,$tendn,$psw);
      }
    }
  }
  $data = $obj->getAll();
?>
            <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <fieldset>
<legend>ĐĂNG KÝ TÀI KHOẢN</legend>
<form action="" method="post" enctype="multipart/form-data">
<table class="tb" align="center">
    <tr>
    	<td>Họ tên khách hàng :</td>
        <td><input type="text" name="ten" /></td>
    </tr>
    <tr>
    	<td>Giới tính : </td>
  		<td>
        	<input type="radio" name="gt" value="1" checked/>Nam &nbsp;
            <input type="radio" name="gt" value="0"/> Nữ
        </td>  
    </tr>
    <tr>
    	<td> Ngày sinh :</td>
        <td><input type="date" name="ns"/></td>
     </tr>
     <tr>
     	<td>Địa chỉ : </td>
        <td><input type="text" name="dc"/></td>
     </tr>
     <tr>
     	<td>Điện thoại : </td>
        <td><input type="text" name="dt"/></td>
     </tr>
     <tr>
     	<td>Email :</td>
        <td><input type="text" name="email"/></td>
     </tr>
     <tr>
     	<td>Tên đăng nhập :</td>
        <td><input type="text" name="tendn"/></td>
     </tr>
     <tr>
     	<td>Mật khẩu :</td>
        <td><input type="password" name="psw"/></td>
     </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" value="Đăng ký" name="Submit"></td>
    </tr>
</table>
</form>
</fieldset>
  </div>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
            <!-- TemplateEndEditable -->
            	
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('../Back-end/include/footer.php'); ?>
      </div>
      
    </div>


</body>
</html>