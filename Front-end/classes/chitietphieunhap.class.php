<?php
class chitietphieunhap extends Db
{
	function getAll()
	{
		return $this->query("select * from chitietphieunhap");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from chitietphieunhap where mapn = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from chitietphieunhap where mapn like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$masp,$sl,$dg,$tt)
	{
		$sql="insert into chitietphieunhap(mapn,masp,soluong,dongia,thanhtien)";
		$sql .="values (?,?,?,?,?)";
		$arr = array($ma,$masp,$sl,$dg,$tt);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from chitietphieunhap where mapn= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$masp,$sl,$dg,$tt)
	{
		$sql="update chitietphieunhap set masp=:MSP,
										  soluong=:S,
										  dongia=:D,
										  thanhtien=:T
										  where makm=:M";
		$arr = array(":M"=>$ma,":MSP"=>$masp,":S"=>$sl,":D"=>$dg,":T"=>$tt);
		return $this->query($sql,$arr);
	}
}
?>