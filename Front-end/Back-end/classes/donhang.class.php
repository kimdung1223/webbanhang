<?php
class donhang extends Db
{
	function getAll()
	{
		return $this->query("select * from donhang");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from donhang where madh = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $manv,$ten,$dc,$dt,$ngay,$tongtien,$ttrang)
	{
		$sql="insert into donhang(madh,manv,hotennguoinhan,diachinguoinhan,dienthoainguoinhan,ngaylapdh,tongtien,tinhtrangdh)";
		$sql .="values (?,?,?,?,?,?,?,?)";
		$arr = array($ma, $manv,$ten,$dc,$dt,$ngay,$tongtien,$ttrang);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from donhang where madh= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma, $manv,$ten,$dc,$dt,$ngay,$tongtien,$ttrang)
	{
		$sql="update donhang set manv =:MNV,
								   hotennguoinhan =:H,
								   diachinguoinhan =:D,
								   dienthoainguoinhan = :DT,
								   ngaylapdh =:N,
								   tongtien =:T,
								   tinhtrangdh = :TT
								   where madh =:M";
		$arr = array(":M"=>$ma,":MNV" => $manv,":H" => $ten, ":D" => $dc,":DT"=>$dt,":N"=>$ngay,":T"=>$tongtien,":TT" => $ttrang);
		return $this->query($sql,$arr);
	}
}
?>