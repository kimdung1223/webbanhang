
<div id="top_left">
	<form action="timkiem.php" method="post">
        <table  align="center">
        &nbsp;&nbsp;<input type="text" name="ts" placeholder="Tìm sản phẩm"/>&nbsp;&nbsp;
        <input type="submit" name="search" value="Tìm kiếm" />
        </table>
       </form>
</div>
 
            <div id="top_right">
            	<?php 
				if (isset($_SESSION['un']))
					{
						echo "<b>Chào&nbsp;".$_SESSION['un']."</b>";
					}
				?>
                <img src="hinh/contact-new.png" /> <a href="reg.php">&nbsp;Đăng ký</a>
                &nbsp;&nbsp;
                <img src="hinh/login.PNG" width="18px" height="14px"/><a href="login.php">&nbsp;Đăng nhập</a>
                &nbsp;&nbsp;
                <img src="hinh/logout.png" width="18px" height="14px" /><a href="logout.php" >&nbsp;Đăng xuất</a>
                &nbsp;&nbsp;
                <img src="hinh/cart.gif" /><a href="../giohang.php">&nbsp;Giỏ hàng&nbsp;</a>
            	&nbsp;&nbsp;
                <img src="hinh/login_ad.png" width="18px" height="14px" /><a href="dangnhap.php">&nbsp;Admin</a>
            </div>
            <div style="clear:both"></div>
            <div id="banner"></div>