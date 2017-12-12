<?php
class cart extends Db{
	private $_cart;
	private $_num_item =0;
	public function  __construct()
	{
		if(!isset($_SESSION["cart"])) $this->_cart= array();
		else $this->_cart = $_SESSION["cart"];
		$this->_num_item = array_sum($this->_cart);
		
	}
	
	public function getNumItem()
	{
		return $this->_num_item;	
	}
	public function __destruct()
	{
		$_SESSION["cart"] = $this->_cart;	
	}
	public function getData()
	{
		return $this->_cart;	
	}
	/*
	Them san pham có mã $id và số lương $quantity vào giỏ hàng
	*/
	
	public function proExist($ma)
	{
		$sql="select * from sanpham where masp = '$ma' ";
		$temp = new Db();
		$temp->queryCart($sql);
		if ($temp->getRowCount()==0)
			//print_r($temp->exeNoneQuery($sql));
		 return false;
		return true;

	}
	public function add($id, $quantity=1)
	{	
		if ($id=="" || $quantity<1) return;
		if (!$this->proExist($id))  return;
		
		print_r($this->_cart);		
		if (isset($this->_cart[$id]))
			$this->_cart[$id]+=	$quantity;
		else $this->_cart[$id]=	$quantity;
		$_SESSION["cart"] = $this->_cart;	
		$this->_num_item = array_sum($this->_cart);

		echo "Da them $id - $quantity ";
		echo "<script language=javascript>window.location='giohang.php';</script>";//Chuyển trình duyệt web tới trang hiển thị cart
	}
	
	public function remove($id)
	{
		unset($this->_cart[$id]);
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	public function edit($id, $quantity)
	{
		$this->_cart[$id]	= $quantity;
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	
	public function show()
	{
		$obj = new sanpham();
		$tongsp=0;
		if (Count($this->_cart)==0) 
		{	echo "<h2>Giỏ hàng rỗng</h2>";
			return;
		}
		echo "
			 <h4>GIỎ HÀNG</h4>
			 <style>
					.tb, .tb th, .tb td 
					{
						border:1px solid #000;
						padding: 10px;
						border-collapse:collapse;
					}
					.tb th
					{
						background-color:#6FC;
					}
					.tb td img
					{
						width:120px;
						height:120px;
					}
				</style>
				<table class='tb' border=\"1\">
				
				<thead>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
						<th>Thành tiền</th>
						<th>Thao tác</th>
					</tr>
				</thead>	
				<br>";
				
		
		foreach($this->_cart as $id=>$quantity)
		{
			$data = $obj->getDataSP($id);
			foreach ($data as $r)
			{
				
				$thanhtien=$r["giatien"]*$quantity;
				?>
				<tr>
						<td><?php echo $r["tensp"];?></td>
					  	<td><?php echo $quantity;?></td>
						<td><?php echo $r["giatien"];?></td>
                        <td><?php echo $thanhtien;?></td>
						<td><a href='../Front-end/giohang.php?ac=del&id=<?php echo $r["masp"];?>'>Xóa</a></td>
				</tr>
						<?php
						$tongsp+=$thanhtien;
			}
		}
		echo "</table>";
		$phivc=35000;
		$tongtien=$tongsp+$phivc;
		echo"<fieldset>
			 <style>fieldset{ width:75%; margin:0 auto; }</style>
			 <legend><b>THÔNG TIN ĐẶT HÀNG</b></legend>
				<form method='post'>
					<table>
						<tr>
							<td>Họ tên người nhận :</td>
							<td><input type='text' placeholder='Nhập họ tên' name='hoten' required><br/></td>
						</tr>
						<tr>
							<td> Tỉnh / Thành phố :</td>
							<td>
								<select name='tinh'>
								
									<option value='HCM'>TP.Hồ Chí Minh</option>
									<option value='HNoi'>Hà Nội</option>
									<option value='AG'>An Giang</option>
									<option value='BRVT'>Bà Rịa - Vũng Tàu</option>
									<option value='BK'>Bắc Kạn</option>
									<option value='BL'>Bạc Liêu</option>
									<option value='BT'>Bến Tre</option>
									<option value='BD'>Bình Dương</option>
									<option value='BP'>Bình Phước</option>
									<option value='BT'>Bình Thuận</option>
									<option value='BĐ'>Bình Định</option>
									<option value='CM'>Cà Mau</option>
									<option value='CT'>Cần Thơ</option>
									<option value='CB'>Cao Bằng</option>
									<option value='ĐNang'>Đà Nẵng</option>
									<option value='ĐL'>Đắk Lắk</option>
									<option value='ĐNong'>Đắk Nông</option>
									<option value='ĐNai'>Đồng Nai</option>
									<option value='ĐB'>Điện Biên</option>
									<option value='GL'>Gia Lai</option>
									<option value='HG'>Hà Giang</option>
									<option value='HN'>Hà Nam</option>
									<option value='HTay'>Hà Tây</option>
									<option value='HTinh'> Hà Tĩnh</option>
									<option value='HD'>Hải Dương</option>
									<option value='HP'>Hải Phòng</option>
									<option value='HG'>Hậu Giang</option>
									<option value='HB'>Hòa Bình</option>
									<option value='H'>Huế</option>
									<option value='HY'>Hưng Yên</option>
									<option value='KH'>Khánh Hòa</option>
									<option value='KG'>Kiên Giang</option>
									<option value='KT'>Kon Tum</option>
									<option value='LC'>Lai Châu</option>
									<option value='LĐ'>Lâm Đồng</option>
									<option value='LS'>Lạng Sơn</option>
									<option value='LC'>Lào Cai</option>
									<option value='LA'>Long An</option>
									<option value='ND'>Nam Định</option>
									<option value='NA'>Nghệ An</option>
									<option value='NB'>Ninh Bình</option>
									<option value='NT'>Ninh Thuận</option>
									<option value='PT'>Phú Thọ</option>
									<option value='PY'>Phú Yên</option>
									<option value='QB'>Quảng Bình</option>
									<option value='QNam'>Quảng Nam</option>
									<option value='QNgai'>Quảng Ngãi</option>
									<option value='QNinh'>Quảng Ninh</option>
									<option value='QTri'>Quảng Trị</option>
									<option value='ST'>Sóc Trăng</option>
									<option value='SL'>Sơn La</option>
									<option value='TNinh'>Tây Ninh</option>
									<option value='TB'>Thái Bình</option>
									<option value='TNguyen'>Thái Nguyên</option>
									<option value='TH'>Thanh Hóa</option>
									<option value='TG'>Tiền Giang</option>
									<option value='TV'>Trà Vinh</option>
									<option value='TQ'>Tuyên Quang</option>
									<option value='VL'>Vĩnh Long</option>
									<option value='VP'>Vĩnh Phúc</option>
									<option value='YB'>Yên Bái</option>
								</select>
							</td>
						</tr>
						<br/>
						<tr>
							<td>Địa chỉ người nhận :</td>
							<td><input type='text' placeholder='Nhập địa chỉ'name='dc'><br/></td>
						</tr>
						<tr>
							<td>Điện thoại người nhận :</td>
							<td><input type='text' placeholder='Nhập điện thoại' name='dt'><br/></td>
						</tr>
						<tr>
							<td>Ghi chú :</td>
							<td><textarea></textarea></td>
						</tr>
						</table>
	 		 </form> 
			 </fieldset>";
		echo "<style>
				#tab, #tab tr, #tb td
				{
					border:1px solid #000;
					padding: 10px;
					border-collapse:collapse;
					margin-left:600px;
					margin-top:20px;
					font-weight:bold;
				}
				#tab td
				{
					text-align:center;
					background-color:#CCC;
				}
				#tong
				{
					color:red;
				}
			  </style>
		<table id='tab'> 
		<tr>
			<td>Tổng tiền sản phẩm :</td> 
			<td>&nbsp;$tongsp</td>
		</tr>
		<tr>
			<td>Phí vận chuyển :</td>
			<td>&nbsp;$phivc</td>
		</tr>
		<tr>
			<td id='tong'> Tổng thành tiền : </td>
			<td>&nbsp;$tongtien</td>
		</tr>
		</table> ";
		$this->setCartInfo($this->getNumItem());
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	
	function setCartInfo( $quantity=0, $id="cart_sumary")
	{
		echo "<script language=javascript> document.getElementById('$id').innerHTML =$quantity; </script>";
	}

}
?>