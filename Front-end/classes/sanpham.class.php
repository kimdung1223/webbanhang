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
	function getbyOne($ma)
	{
		$arr=array("$ma");
		$sql="select * from sanpham where maloaisp=?";
		return $this->query($sql,$arr);
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from sanpham where tensp like ? ";
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
	function getDataSP($id)
	{
		$sql ="select * from sanpham where masp = '$id' ";
		return $this->queryCart($sql);
	}
	function getbyOneCTDH($ma)
	{
		$arr=array("$ma");
		$sql="select * from chitietdonhang where masp=?";
		return $this->query($sql,$arr);
	}
	function getbyOneCTPN($ma)
	{
		$arr=array("$ma");
		$sql="select * from chitietphieunhap where masp=?";
		return $this->query($sql,$arr);
	}
	function getbyOneCTPX($ma)
	{
		$arr=array("$ma");
		$sql="select * from chitietphieuxuat where masp=?";
		return $this->query($sql,$arr);
	}
	function getbyOneBLSP($ma)
	{
		$arr=array("$ma");
		$sql="select * from binhluansp where masp=?";
		return $this->query($sql,$arr);
	}
}
?>