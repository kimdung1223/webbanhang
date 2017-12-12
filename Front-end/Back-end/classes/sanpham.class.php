<?php
class sanpham extends Db
{
	function getAll()
	{
		return $this->query("select * from sanpham");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from sanpham where masp = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($maloai,$masp, $ten,$hinh,$mota,$dvt,$gia)
	{
		$sql="insert into sanpham(maloaisp,masp,tensp,hinhanh,motasp,dvt,giatien)";
		$sql .="values (?,?,?,?,?,?,?)";
		$arr = array($maloai,$masp,$ten,$hinh,$mota,$dvt,$gia);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from sanpham where masp= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($maloai,$masp,$ten,$hinh,$mota,$dvt,$gia)
	{
		$sql="update sanpham set maloaisp = :ML,
									 tensp= :T,
									 hinhanh = :H,
									 mota = :MT,
									 dvt= :D,
									 giatien = :G
									 where masp =:M";
		$arr = array(":ML" => $maloai,":M" => $masp, ":T" => $tensp,":H" =>$hinh, ":MT" =>$mota, ":D" => $dvt,":G"=>$gia);
		return $this->query($sql,$arr);
	}
}
?>