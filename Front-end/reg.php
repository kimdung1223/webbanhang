
<?php
  include "config.php";
  include "autoload.php";
  $obj = new khachhang();
  function checkEmail($string)
  {
  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
   return true;
  return false; 
  }
  //print_r($_POST);
   if (isset($_POST["sm"]))
  {
	$ten=$_POST['hoten'];
	$ns=$_POST['ns'];
	$dc=$_POST['dc'];
	$dt=$_POST['dt'];
	$tendn=$_POST['tendn'];
    $email= $_POST['email'];
    $ma=md5($tendn);
    $psw = $_POST["psw"];
    $pswr = $_POST["psw-repeat"];
	$gt=$_POST["gt"];
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
    }
	else if($pswr!=$psw)
	{
		echo "Mật khẩu không trùng khớp!!!";
	}
    else if (checkEmail($email)==false){
      echo "Định dạng email sai!<br>";
    }
    else
    {
      $q = $obj->getAll();
      foreach($q as $v)
      {
        if($v['email']==$email)
        {
            echo "Tài khoản đã tồn tại";
            
        }
        else
          $data = $obj->insert($ma,$ten,$gt,$ns,$dc,$dt,$email,$tendn,$psw);
		  
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/style_register.css" rel='stylesheet' type='text/css' />
</head>
<body>

<h2>Form Đăng Ký</h2>
<!-- Button to open the modal
<button onclick="document.getElementById('id01').style.display='block'">Đăng ký</button> -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="" method="post">
    <div class="container">
     <label><b>Họ tên</b></label><br/>
      <input type="text" placeholder="Nhập họ tên" name="hoten" required><br/>
       <label><b>Giới tính</b></label><br/>
      <input type="radio" name="gt" value="1" checked/>Nam &nbsp;
            <input type="radio" name="gt" value="0"/> Nữ<br/>
      <label><b>Ngày sinh</b></label><br/>
      <input type="date" name="ns"><br/>
	  <label><b>Địa chỉ</b></label><br/>
      <input type="text" placeholder="Nhập địa chỉ" name="dc"><br/>
	  <label><b>Điện thoại</b></label><br/>
      <input type="number" placeholder="Phải nhập số" name="dt"><br/>
      <label><b>Email</b></label><br/>
      <input type="text" placeholder="Nhập email" name="email" required><br/>
      <label><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập tên đăng nhập" name="tendn" required><br/>
      <label><b>Mật khẩu</b></label><br/>
      <input type="password" placeholder="Nhập mật khẩu" name="psw" required><br/>
      <label><b>Nhập lại mật khẩu</b></label><br/>
      <input type="password" placeholder="Nhập lại mật khẩu" name="psw-repeat" required><br/>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
        <button type="submit" name="sm" class="signupbtn" value="Đăng ký">Đăng Ký</button>
      </div>
    </div>
  </form>
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