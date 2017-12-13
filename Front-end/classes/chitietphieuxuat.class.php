<?php
class chitietphieuxuat extends Db
{
	function getAll()
	{
		return $this->query("select * from chitietphieuxuat");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from chitietphieuxuat where mapx = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from chitietphieuxuat where mapx like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$masp,$sl,$dg)
	{
		$sql="insert into chitietphieuxuat(mapx,masp,soluong,dongia)";
		$sql .="values (?,?,?,?)";
		$arr = array($ma,$masp,$sl,$dg);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from chitietphieuxuat where mapx= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$masp,$sl,$dg,$tt)
	{
		$sql="update chitietphieuxuat set masp=:MSP,
										  soluong=:S,
										  dongia=:D,
										  thanhtien=:T
										  where makm=:M";
		$arr = array(":M"=>$ma,":MSP"=>$masp,":S"=>$sl,":D"=>$dg,":T"=>$tt);
		return $this->query($sql,$arr);
	}
}
?>