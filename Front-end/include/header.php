<?php
if (!isset($_SESSION)) session_start();
include "../Front-end/Back-end/config.php";
include "../Front-end/Back-end/autoload.php";
$db= new Db();
$cart = new cart();

$ac= getIndex("ac");
function getIndex($index, $value='')
{
	$data = isset($_GET[$index])? $_GET[$index]:$value;

	return $data;
}

function postIndex($index, $value='')
{
	$data = isset($_POST[$index])? $_POST[$index]:$value;
	return $data;
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}
if ($ac=="add")
{
	$quantity = getIndex("quantity", 1);
	$id = getIndex("id");

	$cart->add($id, $quantity);
	
	/*echo $id."</br>";
	echo $quantity;*/exit;
}
//Biến $cart được tạo từ trang chủ index.php
if ($ac=="del")
		{
			$quantity = getIndex("quantity", 1);
			$id = getIndex("id");
			$cart->remove($id);
		}
		
?>
<?php
        $obj = new sanpham();
        ?>
<div id="top_left">
	<form action="timkiem.php" method="post">
        <table  align="center">
        &nbsp;&nbsp;<input type="text" name="ts" placeholder="Tìm sản phẩm"/>&nbsp;&nbsp;
        <input type="submit" name="search" value="Tìm kiếm" />
        </table>
       </form>
</div>
<?php
        if (!isset($_POST["search"]))
        {
            $data = $obj->getAll();
        }
        else
        {
            $data = $obj->search($_POST["ts"]);
        }
        ?>
 
            <div id="top_right">
            	<?php 
				 if (isset($_SESSION['un']))
				 {
     	     		 echo "Chào&nbsp;"."<b>".$_SESSION['un']."</b>";
					 
     			}
?>&nbsp;
                <img src="hinh/contact-new.png" /> <a href="../Front-end/Back-end/reg.php">&nbsp;Đăng ký</a>
                &nbsp;&nbsp;
                <img src="hinh/login.PNG" width="18px" height="14px"/><a href="../Front-end/Back-end/login.php">&nbsp;Đăng nhập</a>
                &nbsp;&nbsp;
                <img src="hinh/logout.png" width="18px" height="14px" /><a href="../Front-end/Back-end/logout.php" >&nbsp;Đăng xuất</a>
                &nbsp;&nbsp;
                <img src="hinh/cart.gif" /><a href="../Front-end/giohang.php">&nbsp;Giỏ hàng&nbsp;(<?php echo  $cart->getNumItem();?>) </a>
            	&nbsp;&nbsp;
                <img src="hinh/login_ad.png" width="18px" height="14px" /><a href="../Front-end/Back-end/dangnhap.php">&nbsp;Admin</a>
            </div>
            <div style="clear:both"></div>
            <div id="banner"></div>