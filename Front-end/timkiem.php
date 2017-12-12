<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MỸ PHẨM THIÊN NHIÊN</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="Back-end/css/form.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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
            <div class="content">
            	 <table class="tb">
            		<thead>
            			<tr>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Giá tiền</th>
              			</tr>
            	    </thead>
           	 <?php
            foreach($data as $r)
            { ?>
                <tr>
                <td> <?php echo $r["tensp"]; ?></td>
                <td><img src="Back-end/hinh/<?php echo $r["hinhanh"]; ?>"/></td>
                <td><?php echo $r["motasp"]; ?></td>
                <td><?php echo $r["giatien"]; ?></td>
                </tr>
                <?php
            }
            ?>
            </table> 
            </div>
            <div style="clear:both"></div>
        </div>
      <div id="footer">
        	<?php include('include/footer.php'); ?>
      </div>
      
    </div>
</body>
</html>

</html>
