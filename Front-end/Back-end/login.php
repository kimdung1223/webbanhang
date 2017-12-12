<?php
include "config.php";
include "autoload.php";
$obj = new khachhang();
session_start();
if(isset($_POST['sm']))
{
	$un = $_POST["un"];
	//$pw = md5($_POST["pw"]);
	$pw=$_POST["pw"];
	if($un=="")
	{
      echo "Vui lòng nhập tên đăng nhập!";
	}
    else if($pw=="")
    {
      echo "Vui lòng nhập mật khẩu!";
    }
    else
    {
    	$o2 = $obj->getByOne($un, $pw);
    	foreach ($o2 as $v) 
      {
		    if($v['tendangnhap']==$un && $v['matkhau']==$pw)
		    {
		    	$_SESSION["un"] = $un;
				echo "Xin chào".$un."Bạn đã đăng nhập thành công";
		    	header("location:../index.php");
		    	
		    } 
		  }

      echo "<p style='color:red;'>Thông tin đăng nhập sai!!!</p>";     
    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style_login.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/style_login.css"/>
<style>
fieldset
{
	text-align:center;
}
</style>
</head>
<body>


<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  <fieldset>
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>

    <div class="container">
      <label><b>Tên đăng nhập</b></label><br/>
      <input type="text" placeholder="Nhập tên đăng nhập" name="un" required><br/>

      <label><b>Mật khẩu</b></label><br/>
      <input type="password" placeholder="Nhập mật khẩu" name="pw" required><br/>
        
      <button type="submit" name="sm">Đăng nhập</button>&nbsp;&nbsp;
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
     
    </div>
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
