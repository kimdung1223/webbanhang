<?php
class chitietdonhang extends Db
{
	function getAll()
	{
		return $this->query("select * from chitietdonhang");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from chitietdonhang where madh = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from chitietdonhang where nadh like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$masp,$sl,$dg,$tt)
	{
		$sql="insert into chitietdonhang(madh,masp,soluong,dongia,thanhtien)";
		$sql .="values (?,?,?,?,?)";
		$arr = array($ma,$masp,$sl,$dg,$tt);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from chitietdonhang where madh= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$masp,$sl,$dg,$tt)
	{
		$sql="update chitietdonhang set masp=:MSP,
										soluong=:SL,
										dongia=:D,
										thanhtien=:T
										where madh=:M";
		$arr = array(":M"=>$ma,":MSP"=>$masp,":SL"=>$sl,":D"=>$dg,":T"=>$tt);
		return $this->query($sql,$arr);
	}
}
?>